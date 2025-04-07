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