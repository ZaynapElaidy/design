<!DOCTYPE html>
<html>
<head>
	<title> company</title>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #7c996d">
    <header class="header">
    	<div>
    	    <ul>
                <div class="row">
                    <div class="col-md-6">
                        <li>
                            <h3>
                              <a href="http://dlilyou.com/login" style="float:right;color:#aeef62;width:100x;text-decoration:none;font-size:16px; font-family: 'Teko', sans-serif;">
                                    إنضم إلينا
                                </a> 
                            </h3>
                        </li>
                    </div>
                    <div class="col-md-1">
                        <li>
                            <h3>
                               <a href="http://dlilyou.com/register" style="float: right; color: #aeef62;width:100x; font-size: 16px; text-decoration: none;font-family: 'Teko', sans-serif;">
                                    تسجيل الدخول
                                </a>
                            </h3>
                        </li>
                    </div>
                </div>
            </ul>
            <hr>
            <h1 style="margin: 0 auto; text-align: center;  font-family: 'Teko', sans-serif;">دليليو هو فكر جديد في صناعه الدواجن اهلا بك معنا</h1>
    	</div>
    	<hr>
    	<h3 style="color: #ffcc33; margin: 0 auto; text-align: center;  font-family: 'Teko', sans-serif;">استمتـــع بالتصفــــح هنـــــا</h3>
    </header>

    <div class="content" >
        <div class="container">
           <h2 style="text-align: center; color: #64de13; font-size: 40px;">بورصه الدواجن</h2>
           <p style="text-align: center; color: #d7f300; font-size: 40px;">يمكنك إضافه منتجك هنا </p>
            
          
                        <button type="button" class="add" data-toggle="modal" data-target="#btn1">
                            إضافه منتج
                        </button>
                        <br>
                    
<!--                     <div class='col-sm-6'>
                        <button type="button" class="order" data-toggle="modal" data-target="#btn2">
                            طلب منتج
                        </button>
                    </div> -->
                </div>
            </div>
            
            <div class="row">
                <div class=" col-md-offset-1"  style="margin-left: :400PX">
                    <div class='col-sm-10'>
                        <table class="data" style=" margin-bottom: 26px; color: #29352a">
                            <thead>
                                <tr>
                                    <th class="fluid">اطلب</th>
                                    <th class="fixed">سعر الكيلو</th>
                                    <th class="fixed">الوزن</th>
                                    <th class="fixed">العد</th>
                                    <th class="fixed">النوع</th>
                                  
                                </tr>
                            </thead>
                            <tbody class="b1"></tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class=" col-md-offset-1" style="margin-left:400px">
                    <div class='col-sm-8'>
                        <table class="data2" style=" margin-bottom: 150px; margin-right: 120PX;">
                            <thead>
                                <tr>
                                    <th  class="fluid">سعر الكيلو</th>
                                    <th  class="fixed">الوزن</th>
                                    <th  class="fluid">العد</th>
                                   
                                    

                                </tr>
                            </thead>
                            <tbody class="b2"></tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="btn1" class="modal fade modal-example" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">إضافه منتج</h4>
                </div>
                <form action="#" method="post" >
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">النوع</label>
                            <input type="text" class="form-control type" name="type">
                        </div>
                        <div class="form-group">
                            <label for="">العدد</label>
                            <input type="text" class="form-control num" name="num"/>
                        </div>
                        <div class="form-group">
                            <label for="">الوزن</label>
                            <input type="text" class="form-control wight" name="wight"/><br><br>
                        </div>
                        <div class="form-group">
                            <label for="">السعر للكيلو</label>
                            <input type="number" class="form-control price" name="price"/><br><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default addm">إضافه</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="btn2" class="modal fade modal-example" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">طلب منتج</h4>
                </div>
                <form action="#" method="post">
                    <div class="modal-body">
                      
                        <div class="form-group">
                            <label for="">العدد</label>
                            <input type="text" class="form-control num2" name="num"/>
                        </div>
                        <div class="form-group">
                            <label for="">الوزن</label>
                            <input type="text" class="form-control wight2" name="wight"/>
                        </div>
                        <div class="form-group">
                            <label for="">السعر للكيلو</label>
                            <input type="text" class="form-control price2" name="price"/><br><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default orderm">اطلب</button>
                    </div>
                </form>
            </div>
    	</div>
    </div>

   
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
<section id="contact">
            <div class="section-content">
                <h1 class="section-header">كن علي <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> إتصال بنا</span></h1>
                <h3>دليليو دليلك لبورصه الدواجن</h3>
            </div>
            <div class="contact-section">
            <div class="container">
                <form>
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="exampleInputUsername">الإسم</label>
                            <input type="text" class="form-control" id="" placeholder=" أدخل إسمك">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">الإيميل</label>
                            <input type="email" class="form-control" id="exampleInputEmail" placeholder=" أدخل ايميلك">
                        </div>  
                        <div class="form-group">
                            <label for="telephone">رقم الموبايل</label>
                            <input type="tel" class="form-control" id="telephone" placeholder=" أدخل رقم تليفونك">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for ="description"> رسالتك</label>
                            <textarea  class="form-control" id="description" placeholder="أدخل رسالتك"></textarea>
                        </div>
                        <div>

                            <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  ارسال</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        // $(".order").hide();
        $('.data').hide();
        $('.addm').on('click', function(event){
            event.preventDefault();
           
            var num=$('.num').val();
             var typ= $('.type').val();
            var wigh=$(".wight").val();
            var pric=$(".price").val();
            console.log(typ +num +wigh+pric );
            $('.data').show();
            var tabledata=$('.b1').append('<tr>');
            tabledata=$('.b1').append(
                '<tr><td><button type="button" class="order" data-toggle="modal" data-target="#btn2">طلب المنتج</button></td>'+'<td>'+
                    wigh+
                '</td><td>'+
                    pric+
                '</td><td>'+
                    num+
                '</td><td>'+
                    typ+
               '</td>'+'<td>'+ '</td></tr>');
            $("#addm").modal('hide');
        });
        </script>
        <script type="text/javascript">

        $('.data2').hide();
          $('.data').hide();
        $('.orderm').on('click', function(event){
            event.preventDefault();

           
            var num2=$('.num2').val();
            var wigh2=$(".wight2").val();
            var pric2=$(".price2").val();
            console.log(num2 +wigh2+pric2 );
            $('.data2').show();
            var tabledata2;
            tabledata2 =$('.b2').append('<tr>' +'<td>'+pric2+'</td>'+'<td>'+ wigh2 + '</td>'+'<td>'+ num2 + '</td>'+'</tr>');
        });
    </script>
</body>
</html>
