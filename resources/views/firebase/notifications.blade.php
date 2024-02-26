<script>
    const firebaseConfig = {
        apiKey: "AIzaSyBtheYcRyTIyhe4PUesJx1DCL2psvITPnY",
        authDomain: "traivis-35986.firebaseapp.com",
        projectId: "traivis-35986",
        storageBucket: "traivis-35986.appspot.com",
        messagingSenderId: "777663384566",
        appId: "1:777663384566:web:ca021ad0ec12c195ca95d7"
    };
    // measurementId: G-R1KQTR3JBN
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();

    $(document).ready(function() {

        messaging
            .requestPermission()
            .then(function() {
                return messaging.getToken()
            })
            .then(function(token) {
                // console.log(token);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '{{ route('save-token') }}',
                    type: 'POST',
                    data: {
                        token: token
                    },
                    dataType: 'JSON',
                    success: function(response) {
                        // alert('تم تفعيل الاشعارات');
                        // $('#allnotification_modal').modal('hide');
                    },
                    error: function(err) {
                        console.log(
                            'من فضلك قم بتفعيل اشعارات المتصفح لاستقبال الاشعارات'
                        );
                    },
                });

            }).catch(function(err) {
                /*
                                toastr.error('من فضلك قم بتفعيل اشعارات المتصفح لاستقبال الاشعارات', null, {
                                    timeOut: 4000,
                                    positionClass: "toast-top-left"
                                });
                */
            });

    });


    messaging.onMessage(function(payload) {
        const noteTitle = payload.notification.title;
        const noteOptions = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        new Notification(noteTitle, noteOptions);
        if (Notification.permission === 'granted') {

            console.log('Message received. ', payload);
        }
    });
</script>
