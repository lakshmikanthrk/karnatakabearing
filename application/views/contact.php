<?php include 'header.php'?>
<style>
	.contact {
    padding: 130px 0;
}

.contact .heading h2 {
    font-size: 30px;
    font-weight: 700;
    margin: 0;
    padding: 0;
    margin-bottom: 50px;

}

.contact .heading h2 span {
    color: #ff9100;
}

.contact .heading p {
    font-size: 15px;
    font-weight: 400;
    line-height: 1.7;
    color: #999999;
    margin: 20px 0 60px;
    padding: 0;
}

.contact .form-control {
    padding: 25px;
    font-size: 13px;
    margin-bottom: 10px;
    background: #f9f9f9;
    border: 0;
    border-radius: 10px;
    border:solid 1px #42174e;
}

.contact button.btn {
    padding: 10px;
    border-radius: 10px;
    font-size: 15px;
    background: #ff9100;
    color: #ffffff;
}

.contact .title h3 {
    font-size: 18px;
    font-weight: 600;
}

.contact .title p {
    font-size: 14px;
    font-weight: 400;
    color: #999;
    line-height: 1.6;
    margin: 0 0 40px;
}

.contact .content .info {
    margin-top: 30px;
}
.contact .content .info i {
    font-size: 30px;
    padding: 0;
    margin: 0;
    color: #02434b;
    margin-right: 20px;
    text-align: center;
    width: 20px;
}
.contact .content .info h4 {
    font-size: 13px;
    line-height: 1.4;
}

.contact .content .info h4 span {
    font-size: 13px;
    font-weight: 300;
    color: #999999;
}
 h2{
	margin-top: 40px;
	margin-bottom: 50px;
}
</style>
<section class="contact" id="contact">
        <div class="container">
            <div class="heading text-center">
                <h2>Contact
                    <span> Us </span></h2>
                
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <!-- <h3>Contact detail</h3> -->
                        <h5 class="uppercase">KARNATAKA BEARING CENTRE</h5>
                    </div>
                    <div class="content">
                        <!-- Info-1 -->
                        <div class="info">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <h4 class="d-inline-block">PHONE :
                                <br>
                                <span>+91-9986611867 , 080-22226573</span></h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info">
                            <i class="fa fa-envelope"></i>
                            <h4 class="d-inline-block">EMAIL :
                                <br>
                                <span>kbc.1989@yahoo.com</span></h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h4 class="d-inline-block">ADDRESS :<br>
                                <span>No.9,Shop No.135/A,2nd Floor,<br>
									Auto Towers,Near Visl Building,
									Jc Road, Bangalore,<br>
									Karnataka 560002</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-block" type="submit">Send Now!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'?>