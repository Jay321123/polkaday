<html>
    <head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
</head>
    <body>
        @include('sweetalert::alert')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <video id="preview" width="100%" style="text-align:center;"></video>
                </div>
                <form  action="/scanned-qr" method="get" class="form-horizontal">
                    @csrf
                    <div class="col-md-6">
                        <label>Student ID number</label>
                        <input type="text" name="student_id"   placeholder="student id number" class="form-control" required >
                        <input type="hidden" name="text" id="text" readonyy="" placeholder="scan qrcode" class="form-control" onfocus="this.value=''">
                    </div>
                </form>
               
            </div>
        </div>

        <script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               console.log('test');
               document.getElementById('text').value=c;
               document.forms[0].submit();
           });

        </script>

    </body>
</html>