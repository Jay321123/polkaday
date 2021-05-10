@extends('layouts.scan-form')
@section('main-content')
<style>
    .button {
      padding: 15px 25px;
      font-size: 14px;
      text-align: center;
      cursor: pointer;
      outline: none;
      color: #fff;
      background-color: #1bac33;
      border: none;
      border-radius: 15px;
     
    }
    
    .button:hover {background-color: #6fd672}
    
    .button:active {
      background-color: #3e8e41;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }
    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <form class="qr-log" method="post">
        @csrf
            <div class="form-group text-center">
                <label for="exampleFormControlTextarea1" style="color: green"><b> Input School Id </b></label>
                <textarea style="color: green; background-color: transparent" class="form-control" id="exampleFormControlTextarea1" rows="1" name="school_id" type="text" placeholder="Enter Id Number......"></textarea>
            </div>

            <div  class="text-center">
                <div >
                    <label style="color: green"><b> Scan your QR </b></label>
                    <input  style="color: green; background-color: transparent" type="text" onfocus="this.value=''" class="form-control" name="qr_number" id="my-input" placeholder="Scan QR. . . . . "><br>
                </div>
            </div>
      
    </form>
    <form action="/home" method="GET">
        <button class="button"><b>Dashboard</b></button>
        </form>
    <div class="form-status-holder"></div>

    <script>
        var timeoutId;
        $('form input').on('input propertychange change', function() {
            console.log('Textarea Change');

            clearTimeout(timeoutId);
            timeoutId = setTimeout(function() {
                // Runs 1 second (1000 ms) after the last change
                saveToDB();
            }, 1000);
        });

        function saveToDB()
        {
            console.log('Saving to the db');
            form = $('.qr-log');
            $.ajax({
                url: "/qr-log",
                type: "POST",
                data: form.serialize(), // serializes the form's elements.
                beforeSend: function(xhr) {
                    // Let them know we are saving

                    var status= 'saving';
                   var th= $('.form-status-holder').html(status);

                   window.onerror = function () {
                       alert("qr error");
                   }

                },
                success: function(data) {
                    var jqObj = jQuery(data); // You can get data returned from your ajax call here. ex. jqObj.find('.returned-data').html()
                    // Now show them we saved and when we did

                    //this will clear input after sending data to server
                    $('input[type="text"],textarea').val('');

                    var d = new Date();
                    $('.form-status-holder').html('Saved! Last: ' + d.toLocaleTimeString());



                },
            });
        }

        // This is just so we don't go anywhere
        // and still save if you submit the form
        $('.qr-log').submit(function(e) {
            saveToDB();
            e.preventDefault();
        });
    </script>
    @endsection
