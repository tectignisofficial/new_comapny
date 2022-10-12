
	<?php
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel" style="font-size: x-large;">Request A Quote</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="contact-form">
                    <form id="contact-form" action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="email" name="email" id="email" placeholder="Your Email">
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="phone" id="phone" placeholder="Your Phone">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="subject" id="subject" placeholder="Your Subjects">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input">
                                    <textarea name="message" id="message" placeholder="Write Message"
                                        spellcheck="false"></textarea>
                                    <i class="fas fa-pen"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="submit" id="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <p class="ajax-response"></p>
                </div>
            </div>

        </div>
    </div>
</div>
?>