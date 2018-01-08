    <form class="form-horizontal" id="interact_with_department" role="form" action="<?php base_url(); ?>page/contactus" method="post">
        <div id="messages"></div>
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />	
        <input id="type" name="type" class="form-control" type="hidden" value="Contact Us">	
        <div class="form-group">
           
            <div class="col-sm-12">
                <input id="name" name="name" class="form-control" type="text" placeholder="Enter Your Name">
            </div>
        </div>

        <div class="form-group">
           
            <div class="col-sm-12">
                <input id="email" name="email" class="form-control" type="email" placeholder="Enter Email Address">
            </div>
        </div>
        <div class="form-group">
            
            <div class="col-sm-12">
                <input id="subject" name="subject" class="form-control" type="text" placeholder="Enter Subject">
            </div>
        </div>
        <div class="form-group">
            
            <div class="col-sm-12">
                <textarea id="comment" name="comment" class="form-control" rows="6" placeholder="Comments"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <button class="btn blue-bar" type="submit" id="submitview" style="color:#fff">Submit</button>
            </div>
        </div>
    </form>
<script type="text/javascript">
    $('#interact_with_department').submit(function (event) {
        $('html, body').animate({scrollTop: 0}, 'slow');
        event.preventDefault();
        var formData = $(this).serialize();
        call_page_loader(1);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: formData,
            success: function (data) {

                if (data == 1)
                {

                    $('#name').val('');
                    $('#email').val('');
                    $('#subject').val('');
                    $('#comment').val('');
                    $('#messages').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Your Message has been sent successfully to authority.</div>');
                } else if (data == 2) {
                    $('#messages').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Your Message has not been sent to authority.</div>');
                } else if (data == 3) {
                    $('#messages').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Not allow malicious script.</div>');
                }

                $('html, body').animate({scrollTop: $('#interact_with_department').offset().top}, 2000);
                call_page_loader(2);

            },
            error: function () {
                alert('error in ajax form submission');
            }
        });
        return false;
    });
    $(function () {
        $("[name=name]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });
    });
    $(function () {
        $("[name=email]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`~!#$%^&*()|+\-=?;:'",<>\{\}\[\]\\\/]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!#$%^&*()|+\-=?;:'",<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });
    });
    $(function () {
        $("[name=subject]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`~!@#$%^&*|+-=?;:'"<>\{\}\[\]\\\/]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!@#$%^&*()|+-=?;:'"<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });
    });
    $(function () {
        $("[name=comment]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`~#$%^&*|+\-=;<>\{\}\[\]\\\/]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!#$%^&*|+\-=;<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });
    });

</script>