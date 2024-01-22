<!-- Core JS -->
<!-- build:js vendor/imageupload/vendor/js/core.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js"></script>

<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/node-waves/node-waves.js') }}"></script>

<script src="{{ asset('vendor/imageupload/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ asset('vendor/imageupload/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('vendor/imageupload/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/swiper/swiper.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/tagify/tagify.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/autosize/autosize.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/jquery-sticky/jquery-sticky.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/toastr/toastr.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/sortablejs/sortable.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/jstree/jstree.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/quill/katex.js') }}"></script>
<script src="{{ asset('vendor/imageupload/vendor/libs/quill/quill.js') }}"></script>
{{-- <script src="{{ asset('vendor/imageupload/vendor/libs/dropzone/dropzone.js') }}"></script> --}}



<!-- Main JS -->
<script src="{{ asset('vendor/imageupload/js/main.js') }}"></script>

<!-- Page JS -->
{{-- <script src="{{ asset('vendor/imageupload/js/dashboards-ecommerce.js')}}"></script>
<script src="{{ asset('vendor/imageupload/js/pages-account-settings-account.js')}}"></script> --}}
<script src="{{ asset('vendor/imageupload/js/ui-toasts.js') }}"></script>
<script src="{{ asset('vendor/imageupload/js/extended-ui-treeview.js') }}"></script>
<script src="{{ asset('vendor/imageupload/js/pages-auth.js') }}"></script>


{{-- <script src="{{ asset('vendor/imageupload/js/dashboards-analytics.js') }}"></script> --}}
{{-- <script src="{{ asset('vendor/imageupload/js/app-user-list.js') }}"></script> --}}
{{-- <script src="{{ asset('vendor/imageupload/js/form-validation.js') }}"></script> --}}
<script src="{{ asset('vendor/imageupload/js/forms-extras.js') }}"></script>
<script src="{{ asset('vendor/imageupload/js/form-layouts.js') }}"></script>
<script src="{{ asset('vendor/imageupload/js/extended-ui-sweetalert2.js') }}"></script>
<script src="{{ asset('vendor/imageupload/js/extended-ui-drag-and-drop.js') }}"></script>
<script src="{{ asset('vendor/imageupload/js/pages-account-settings-account.js')}}"></script>
<script src="{{ asset('vendor/imageupload/js/forms-file-upload.js')}}"></script>


@stack('scripts')
@include('imageupload::admin.layout.function')


