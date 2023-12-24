@extends('templates.user')

@section('content')
    <style>
        /* Bootstrap 5 CSS and icons included */
        :root {
            --colorPrimaryNormal: #00b3bb;
            --colorPrimaryDark: #00979f;
            --colorPrimaryGlare: #00cdd7;
            --colorPrimaryHalf: #80d9dd;
            --colorPrimaryQuarter: #bfecee;
            --colorPrimaryEighth: #dff5f7;
            --colorPrimaryPale: #f3f5f7;
            --colorPrimarySeparator: #f3f5f7;
            --colorPrimaryOutline: #dff5f7;
            --colorButtonNormal: #00b3bb;
            --colorButtonHover: #00cdd7;
            --colorLinkNormal: #00979f;
            --colorLinkHover: #00cdd7;
        }

        body {
            margin: 24px;
        }


        .upload_dropZone {
            color: #0f3c4b;
            background-color: var(--colorPrimaryPale, #c8dadf);
            outline: 2px dashed var(--colorPrimaryHalf, #c1ddef);
            outline-offset: -12px;
            transition:
                outline-offset 0.2s ease-out,
                outline-color 0.3s ease-in-out,
                background-color 0.2s ease-out;
        }

        .upload_dropZone.highlight {
            outline-offset: -4px;
            outline-color: var(--colorPrimaryNormal, #0576bd);
            background-color: var(--colorPrimaryEighth, #c8dadf);
        }

        .upload_svg {
            fill: var(--colorPrimaryNormal, #0576bd);
        }

        .btn-upload {
            color: #fff;
            background-color: var(--colorPrimaryNormal);
        }

        .btn-upload:hover,
        .btn-upload:focus {
            color: #fff;
            background-color: var(--colorPrimaryGlare);
        }

        .upload_img {
            width: calc(33.333% - (2rem / 3));
            object-fit: contain;
        }
    </style>
    <div class="my-5 px-4 py-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset('storage/logopng.png') }}" alt="" width="72" height="57">
        <h3 class="bold">Centered hero</h3>
        <div class="col-lg-6 mx-auto">
            <div class="d-grid d-sm-flex justify-content-sm-center gap-2">
                <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                    class="btn btn-outline-danger btn-xs px-4">Unverified</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Upload KTP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="/">
                            <fieldset class="upload_dropZone mb-3 p-4 text-center">
                                <legend class="visually-hidden">Image uploader</legend>
                                <svg class="upload_svg" width="60" height="60" aria-hidden="true">
                                    <use href="#icon-imageUpload"></use>
                                </svg>
                                <p class="small my-2">Drag &amp; Drop Identitas<br><i>or</i>
                                </p>
                                <input id="upload_image_background" data-post-name="image_background"
                                    data-post-url="https://someplace.com/image/uploads/backgrounds/"
                                    class="position-absolute invisible" type="file" multiple
                                    accept="image/jpeg, image/png, image/svg+xml" />
                                <label class="btn btn-upload mb-3" for="upload_image_background">Cari file diberkas</label>
                                <div class="upload_gallery d-flex justify-content-center mb-0 flex-wrap gap-3"></div>
                            </fieldset>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" >Verifikasi</button>
                            </div>
                        </form>
                        <svg style="display:none">
                            <defs>
                                <symbol id="icon-imageUpload" clip-rule="evenodd" viewBox="0 0 96 96">
                                    <path
                                        d="M47 6a21 21 0 0 0-12.3 3.8c-2.7 2.1-4.4 5-4.7 7.1-5.8 1.2-10.3 5.6-10.3 10.6 0 6 5.8 11 13 11h12.6V22.7l-7.1 6.8c-.4.3-.9.5-1.4.5-1 0-2-.8-2-1.7 0-.4.3-.9.6-1.2l10.3-8.8c.3-.4.8-.6 1.3-.6.6 0 1 .2 1.4.6l10.2 8.8c.4.3.6.8.6 1.2 0 1-.9 1.7-2 1.7-.5 0-1-.2-1.3-.5l-7.2-6.8v15.6h14.4c6.1 0 11.2-4.1 11.2-9.4 0-5-4-8.8-9.5-9.4C63.8 11.8 56 5.8 47 6Zm-1.7 42.7V38.4h3.4v10.3c0 .8-.7 1.5-1.7 1.5s-1.7-.7-1.7-1.5Z M27 49c-4 0-7 2-7 6v29c0 3 3 6 6 6h42c3 0 6-3 6-6V55c0-4-3-6-7-6H28Zm41 3c1 0 3 1 3 3v19l-13-6a2 2 0 0 0-2 0L44 79l-10-5a2 2 0 0 0-2 0l-9 7V55c0-2 2-3 4-3h41Z M40 62c0 2-2 4-5 4s-5-2-5-4 2-4 5-4 5 2 5 4Z" />
                                </symbol>
                            </defs>
                        </svg>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <h3 class="display fw-bold lh-1 my-3"><i class="fa-solid fa-house"></i> room yang sedang pesan</h3>
    <div class="col-lg-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table-vcenter card-table table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NO Kamar</th>
                            <th>Nama Kamar</th>
                            <th>Nama Tamu</th>
                            <th>Status</th>
                            <th>Dibuat</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        console.clear();
        ('use strict');
        (function() {
            'use strict';

            const preventDefaults = event => {
                event.preventDefault();
                event.stopPropagation();
            };

            const highlight = event =>
                event.target.classList.add('highlight');

            const unhighlight = event =>
                event.target.classList.remove('highlight');

            const getInputAndGalleryRefs = element => {
                const zone = element.closest('.upload_dropZone') || false;
                const gallery = zone.querySelector('.upload_gallery') || false;
                const input = zone.querySelector('input[type="file"]') || false;
                return {
                    input: input,
                    gallery: gallery
                };
            }

            const handleDrop = event => {
                const dataRefs = getInputAndGalleryRefs(event.target);
                dataRefs.files = event.dataTransfer.files;
                handleFiles(dataRefs);
            }

            const eventHandlers = zone => {
                const dataRefs = getInputAndGalleryRefs(zone);
                if (!dataRefs.input) return;;
                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
                    zone.addEventListener(event, preventDefaults, false);
                    document.body.addEventListener(event, preventDefaults, false);
                });;
                ['dragenter', 'dragover'].forEach(event => {
                    zone.addEventListener(event, highlight, false);
                });;
                ['dragleave', 'drop'].forEach(event => {
                    zone.addEventListener(event, unhighlight, false);
                });
                zone.addEventListener('drop', handleDrop, false);
                dataRefs.input.addEventListener('change', event => {
                    dataRefs.files = event.target.files;
                    handleFiles(dataRefs);
                }, false);

            }
            const dropZones = document.querySelectorAll('.upload_dropZone');
            for (const zone of dropZones) {
                eventHandlers(zone);
            }
            const isImageFile = file => ['image/jpeg', 'image/png', 'image/svg+xml'].includes(file.type);

            function previewFiles(dataRefs) {
                if (!dataRefs.gallery) return;
                for (const file of dataRefs.files) {
                    let reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onloadend = function() {
                        let img = document.createElement('img');
                        img.className = 'upload_img mt-2';
                        img.setAttribute('alt', file.name);
                        img.src = reader.result;
                        dataRefs.gallery.appendChild(img);
                    }
                }
            }
            const imageUpload = dataRefs => {
                if (!dataRefs.files || !dataRefs.input) return;
                const url = dataRefs.input.getAttribute('data-post-url');
                if (!url) return;
                const name = dataRefs.input.getAttribute('data-post-name');
                if (!name) return;
                const formData = new FormData();
                formData.append(name, dataRefs.files);
                fetch(url, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('posted: ', data);
                        if (data.success === true) {
                            previewFiles(dataRefs);
                        } else {
                            console.log('URL: ', url, '  name: ', name)
                        }
                    })
                    .catch(error => {
                        console.error('errored: ', error);
                    });
            }

            const handleFiles = dataRefs => {
                let files = [...dataRefs.files];
                files = files.filter(item => {
                    if (!isImageFile(item)) {
                        console.log('Not an image, ', item.type);
                    }
                    return isImageFile(item) ? item : null;
                });

                if (!files.length) return;
                dataRefs.files = files;

                previewFiles(dataRefs);
                imageUpload(dataRefs);
            }

        })();
    </script>
@endsection
