@if ($errors->any())

    <script>
        @foreach ($errors->getMessages() as $field => $error)
            var element = $(document).find('[name="{{ $field }}"]').addClass('error-input');
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append('<label class="error">{{ $error[0] }}</label>')
            } else {
                $(element).after('<label class="error">{{ $error[0] }}</label>');
            }
        @endforeach
    </script>

@endif

@if ($message = Session::get('success'))
    <script>
        iziToast.success({

            title: '{{ $message }}',

            position: "topRight",

        });
    </script>
@endif

@if ($message = Session::get('error'))
    <script>
        iziToast.error({

            title: '{{ $message }}',

            position: "topRight",

        });
    </script>
@endif
