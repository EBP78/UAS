<!-- comment -->
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pesan  =$_POST['pesan'];
        $comment = "insert into komentar values (null, '$name', '$email', '$pesan');";
        mysqli_query($connection, $comment);
        header("location:#");
    }
?>
<section id="stayconnect" class="bglight position-relative">
    <div class="container">
        <div class="contactus-wrapp">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title wow fadeInUp text-center text-md-left" data-wow-delay="300ms">
                        <h3 class="darkcolor bottom20">Comment here</h3>
                    </div>
                </div>
                <div class="post-comment">
                    <div class="text-center text-md-left">
                        <h4 class="text-capitalize darkcolor">Add Comment</h4>
                        <p class="bottom20 top20"><small class="fas fa-asterisk"></small> Your Email address will not be published</p>
                    </div>
                    <form class="getin_form" id="post-a-comment" method="POST">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <label for="first_name1" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Name" required id="first_name1" name="name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <label for="email1" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email" required id="email1" name="email">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="message" class="d-none"></label>
                                    <textarea class="form-control" placeholder="Message" id="message" name="pesan"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 bottom5 text-sm-left text-center">
                                <button type="submit" class="button gradient-btn" name="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="profile-authors heading_space">
                        <h4 class="text-capitalize darkcolor bottom40">Comments</h4>
                        <?php
                            $query = "select komentarname, komentarcontent from komentar;";
                            $query_run = mysqli_query($connection, $query);
                            while ($data = mysqli_fetch_array($query_run)){
                        ?>
                            <div class="eny_profile bottom30">
                                <div class="profile_photo"><img src="app-assets/images/profile.webp" alt="Comments"> </div>
                                <div class="profile_text bottom0">
                                    <h5 class="darkcolor"><a href="#."><?php
                                        echo $data['komentarname'];
                                    ?></a></h5>
                                    <a href="javascript:void(0)" class="readmorebtn font-bold"> <i class="fas fa-reply"></i> Reply</a>
                                    <p class="top10 bottom0"><?php
                                        echo nl2br($data['komentarcontent']);
                                    ?></p>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                    <!-- comment copy dan masukan ke footer -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US ends -->
