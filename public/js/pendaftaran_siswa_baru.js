//  next previous
let currentStep = 1;
let maxStepReached = 1;
const totalSteps = document.querySelectorAll('.step').length;
    
function scrollToStepNav() {
    const navElement = document.getElementById('stepFirst');
    if (navElement) {
        const yOffset = -20;
        const y = navElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
        window.scrollTo({ top: y, behavior: 'smooth' });
    }
}
    
function showStep(step) {
    if (step <= maxStepReached) {
        document.querySelectorAll('.step').forEach(stepEl => stepEl.classList.add('d-none'));
        document.getElementById('step-' + step).classList.remove('d-none');
    
        document.querySelectorAll('#stepFirst .card').forEach(nav => nav.classList.remove('active-step'));
        document.getElementById('nav-step-' + step).classList.add('active-step');
    
        currentStep = step;
        scrollToStepNav();
    }
}
    
function nextStep() {
    const currentForm = document.querySelector(`#step-${currentStep}`);
    const inputs = currentForm.querySelectorAll('input, select, textarea');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.checkValidity()) {
            isValid = false;
            input.classList.add('is-invalid');
        } else {
            input.classList.remove('is-invalid');
        }
    });
    
    if (isValid && currentStep < totalSteps) {
        currentStep++;
        maxStepReached = Math.max(maxStepReached, currentStep);
        enableStepNavLinks();
        showStep(currentStep);
    }
}
    
function prevStep() {
    if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
    }
}
    
function enableStepNavLinks() {
    for (let i = 1; i <= totalSteps; i++) {
        const navLink = document.getElementById(`nav-step-${i}`);
        if (i <= maxStepReached) {
            navLink.classList.remove('disabled');
        } else {
            navLink.classList.add('disabled');
        }
    }
}
    
// Event listener dinamis untuk nav step
for (let i = 1; i <= totalSteps; i++) {
    const nav = document.getElementById(`nav-step-${i}`);
    if (nav) {
        nav.addEventListener('click', () => {
            if (i <= maxStepReached) {
                showStep(i);
            }
        });
    }
}
    
document.addEventListener('DOMContentLoaded', function() {
    showStep(currentStep);
    enableStepNavLinks();
});

// -------------- POST DATA ---------------- //
document.addEventListener("DOMContentLoaded", function() {
    if (window.location.hash === "#galeri") {
        document.getElementById("galeri").scrollIntoView({ behavior: "smooth" });
    }
});

$(window).on('load', function() {
    $('#preloader').fadeOut('slow');
});

$('#bahasa_asing').select2({
    tags: true,
    placeholder: 'Silahkan ketik bahasa asing yang ingin anda cari...',
    width: '100%',
    language: {
        noResults: function () {
            return "Klik pilih atau tekan enter untuk menambahkan..";
        }
    }
});

$('#pernah_keluar_negeri').select2({
    tags: true,
    placeholder: "Pilih atau ketik jawaban...",
    allowClear: true,
    width: '100%',
    language: {
        noResults: function () {
            return "Tidak ditemukan, tekan Enter untuk menambahkan";
        }
    }
});

// insert data
$(document).ready(function() {
    $('.signup-form').on('submit', function(e) {
        e.preventDefault();

        let bahasaAsing = $('#bahasa_asing').val();
        if (bahasaAsing) {
            let bahasaAsingString = Array.isArray(bahasaAsing) ? bahasaAsing.join(', ') : bahasaAsing;
            $('<input>').attr({
                type: 'hidden',
                name: 'bahasa_asing',
                value: bahasaAsingString
            }).appendTo('.signup-form');
        }

        Swal.fire({
            title: 'Apakah Anda yakin ingin mendaftarkan diri?',
            text: 'Pastikan data yang anda masukan sesuai dan benar, jika ada kesalahan hubungi bagian administrasi untuk mengubahnya!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Batal',
            confirmButtonColor: '#046392'
        }).then((result) => {
            if (result.isConfirmed) {
                var form = $('.signup-form');
                var formData = form.serialize();

                Swal.fire({
                    text: 'Mohon tunggu sedang memproses pendaftaran...',
                    icon: 'warning',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        Swal.close();

                        if (response.success) {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Berhasil daftar di LPK ACC Japan Centre!',
                                icon: 'success',
                                timer: 3000,
                                showConfirmButton: false,
                            }).then(() => {
                                location.reload();
                            });
                        } else {
                            let message = response.message || 'Terjadi kesalahan saat mengirim data.';
                            let errors = response.errors ? Object.values(response.errors).flat().join('\n') : '';

                            Swal.fire({
                                title: 'Gagal!',
                                text: `${message}\n${errors}`,
                                icon: 'error',
                                confirmButtonText: 'Tutup'
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.close();
                        let errorMessage = 'Terjadi kesalahan sistem.';
                        if (xhr.responseJSON?.errors) {
                            errorMessage = Object.values(xhr.responseJSON.errors).flat().join('\n');
                        } else if (xhr.responseJSON?.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        Swal.fire({
                            title: 'Error!',
                            text: errorMessage,
                            icon: 'error',
                            confirmButtonText: 'Tutup'
                        });
                    }
                });
            }
        });
    });
});