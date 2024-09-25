<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image ACC</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
    <link href="https://amanahcitracemerlang.id/upload_image/1724591989_logojepang.png" rel="icon">
    <style>
        * {
            box-sizing: border-box;
        }

        :root {
            --c-action-primary: #2e44ff;
            --c-action-primary-accent: #e9e5ff;
            --c-action-secondary: #e5e5e5;
            --c-text-primary: #0d0f21;
            --c-text-secondary: #6a6b76;
            --c-background-primary: #d0d1de;
        }

        body {
            font-family: "Inter", sans-serif;
            color: var(--c-text-primary);
            background-color: var(--c-background-primary);
            line-height: 1.5;
            padding: 10px;
        }

        input,
        button,
        select,
        textarea {
            font: inherit;
        }

        .modal {
            width: 90%;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 6vh;
            margin-bottom: 10vh;
            background-color: #FFF;
            border-radius: 0.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: 1.5rem 1.5rem 1rem;
        }

        .logo-circle {
            width: 3.5rem;
            height: 3.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background-color: var(--c-action-primary-accent);
        }

        .logo-circle svg {
            max-width: 1.5rem;
        }

        .btn-close {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.25rem;
            height: 2.25rem;
            border-radius: 0.25rem;
            border: none;
            background-color: transparent;
        }

        .btn-close:hover,
        .btn-close:focus {
            background-color: var(--c-action-primary-accent);
        }

        .modal-body {
            padding: 1rem 1.5rem;
        }

        .modal-title {
            font-weight: 700;
        }

        .modal-description {
            color: var(--c-text-secondary);
        }

        .upload-area {
            margin-top: 1.25rem;
            border: none;
            background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23ccc' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
            background-color: transparent;
            padding: 2rem;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .upload-area:hover,
        .upload-area:focus {
            background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%232e44ff' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
        }

        .upload-area-icon {
            display: block;
            width: 2.25rem;
            height: 2.25rem;
        }

        .upload-area-title {
            margin-top: 1rem;
            display: block;
            font-weight: 700;
            color: var(--c-text-primary);
            text-align: center;
        }

        .upload-area-description {
            display: block;
            color: var(--c-text-secondary);
            text-align: center;
        }

        .modal-footer {
            padding: 1rem 1.5rem 1.5rem;
            display: flex;
            justify-content: flex-end;
        }

        .modal-footer [class*=btn-] {
            margin-left: 0.75rem;
        }

        .btn-secondary,
        .btn-primary {
            padding: 0.5rem 1rem;
            font-weight: 500;
            border: 2px solid var(--c-action-secondary);
            border-radius: 0.25rem;
            background-color: transparent;
        }

        .btn-primary {
            color: #FFF;
            background-color: var(--c-action-primary);
            border-color: var(--c-action-primary);
        }

        .file-upload-wrapper {
            position: relative;
            text-align: center;
        }

        .file-upload-label {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        #images {
            display: none;
        }

        @media (max-width: 600px) {
            .upload-area {
                padding: 1rem;
            }

            .modal-header {
                padding: 1rem;
            }

            .modal-body {
                padding: 1rem;
            }
        }
    </style>
</head>

<body style="padding-bottom: 0px;margin-bottom: 0px;background-color: #1e6c93;">
    <div class="modal">
        <div class="modal-body">
            <h2 class="modal-title">Upload a file</h2>
            <p class="modal-description">Attach the file below</p>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form id="uploadForm" action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="images" class="upload-area" style="cursor: pointer;">
                        <span class="upload-area-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="340.531" height="419.116"
                                viewBox="0 0 340.531 419.116">
                                <!-- SVG Content -->
                            </svg>
                        </span>
                        <span class="upload-area-title">Drag file(s) here to upload.</span>
                        <span class="upload-area-description">
                            Alternatively, you can select a file by <br />
                        </span>
                        <div class="file-upload-wrapper">
                            <label for="images" class="file-upload-label">Choose Image</label>
                            <input type="file" name="images[]" id="images" class="d-none" multiple required>
                        </div>
                    </label>
                </div>

                <div class="modal-footer" style="margin-top: 10px;">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
