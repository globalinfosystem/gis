<style>
    *.unselectable {
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;

        /*
          Introduced in IE 10.
          See http://ie.microsoft.com/testdrive/HTML5/msUserSelect/
        */
        -ms-user-select: none;
        user-select: none;

        font-family: Georgia;
        font-size: 55px;
        font-weight: bold;
        text-decoration: line-through;
    }
</style>

<?php $key = SB_controller::encodekey(); ?>
<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3><?php echo $this->lang->line('core.m_myaccount'); ?> <small>View Detail My Info</small></h3>
        </div>

        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard'); ?>"><?php echo $this->lang->line('core.m_dashboard'); ?> </a></li>
            <li><a href="<?php echo site_url('config'); ?>"><?php echo $this->lang->line('core.m_myaccount'); ?> </a></li>
        </ul>
    </div>  

    <div class="page-content-wrapper m-t">
        <ul class="nav nav-tabs" >
            <li class="active"><a href="#info" data-toggle="tab"><?php echo $this->lang->line('core.personalinfo'); ?> </a></li>
            <li ><a href="#pass" data-toggle="tab"><?php echo $this->lang->line('core.password'); ?> </a></li>
        </ul>	

        <div class="tab-content">
            <div class="tab-pane active m-t" id="info">
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo validation_errors(); ?>
                <form class="form-horizontal" action="<?php echo site_url('user/saveProfile'); ?>" method="post"  parsley-validate='true' novalidate='true' enctype="multipart/form-data"> 
                    <div class="form-group">
                        <label for="ipt" class=" control-label col-md-4"> Username </label>
                        <div class="col-md-8">
                            <input name="username" type="text" id="username" disabled="disabled" class="form-control input-sm" required  value="<?php echo $info->username; ?>" />  
                        </div> 
                    </div>  
                    <div class="form-group">
                        <label for="ipt" class=" control-label col-md-4"> Email  </label>
                        <div class="col-md-8">
                            <input name="email" type="text" id="email"  class="form-control" value="<?php echo $info->email ?>" /> 
                            <?php echo form_error('email'); ?>
                        </div> 
                    </div> 	  

                    <div class="form-group">
                        <label for="ipt" class=" control-label col-md-4"><?php echo $this->lang->line('core.firstname'); ?> </label>
                        <div class="col-md-8">
                            <input name="first_name" type="text" id="first_name" class="form-control " required value="<?php echo $info->first_name ?>" /> 
                        </div> 
                    </div>  

                    <div class="form-group">
                        <label for="ipt" class=" control-label col-md-4"><?php echo $this->lang->line('core.lastname'); ?> </label>
                        <div class="col-md-8">
                            <input name="last_name" type="text" id="last_name" class="form-control " required value="<?php echo $info->last_name ?>" />  
                        </div> 
                    </div>    

                    <div class="form-group  " >
                        <label for="ipt" class=" control-label col-md-4 text-right"> Avatar </label>
                        <div class="col-md-8">
                            <input type="file" name="avatar">
                            <br />
                            Image Dimension 80 x 80 px <br />
                            <?php echo SiteHelpers::showUploadedFile($info->avatar, '/uploads/users/') ?>

                        </div> 
                    </div>  
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                    <div class="form-group">
                        <label for="ipt" class=" control-label col-md-4"> </label>
                        <div class="col-md-8">
                            <button class="btn btn-success" type="submit"><?php echo $this->lang->line('core.sb_savechanges'); ?> </button>
                        </div> 
                    </div> 	

                </form>
            </div>

            <div class="tab-pane  m-t" id="pass">
                <form class="form-horizontal" action="<?php echo site_url('user/savePassword'); ?>" method="post"  parsley-validate='true' novalidate='true'>  

                    <div class="form-group">
                        <label for="ipt" class=" control-label col-md-4"><?php echo $this->lang->line('core.newpassword'); ?> </label>
                        <div class="col-md-8">
                            <input required="required" name="password" type="password" id="password" class="form-control input-sm" value="" /> 
                        </div> 
                    </div>  

                    <div class="form-group">
                        <label for="ipt" class=" control-label col-md-4"><?php echo $this->lang->line('core.repassword'); ?> </label>
                        <div class="col-md-8">
                            <input required="required" name="password_confirmation" type="password" id="password_confirmation" class="form-control input-sm" value="" />  
                        </div> 
                    </div>    

                    <div class="form-group">
                        <label for="ipt" class=" control-label col-md-4"><?php echo "Captcha"; ?> </label>
                        <div class="col-md-8">
                            <?php $captchaCode = rand(10000, 10000000); ?>
                            <input name="captcha" required="required" type="text" id="captcha" autocomplete="off" class="form-control input-sm" placeholder="please enter below text here" />  
                            <br><i style="font-weight:bold; font-size:30px;" unselectable="on" class="unselectable"><?php echo $captchaCode; ?></i>
                            <input type="hidden" name="captchatext" id="captchatext" readonly="readonly" value="<?php echo $captchaCode; ?>" style="border:none;" />
                        </div>

                    </div>
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                    <div class="form-group">
                        <label for="ipt" class=" control-label col-md-4"> </label>
                        <div class="col-md-8">
                            <button class="btn btn-danger user_pass" type="submit"><?php echo $this->lang->line('core.sb_savechanges'); ?> </button>
                        </div> 
                    </div>   
                </form>
            </div>



        </div>
    </div>

</div>

<script type='text/javascript' src='https://wordpress.org/plugins/bb-includes/js/jquery/jquery.js?ver=1.4.2'></script>
<script type="text/javascript">
    jQuery(document).ready(function () {


        jQuery('#password').change(function () {
            var userName = document.getElementById('password').value;
            $('#password').val('<?php echo $key ?>&'+base64_encode(base64_encode(userName)));
        });


        jQuery('#password_confirmation').change(function () {
            var userPassword = document.getElementById('password_confirmation').value;
            $('#password_confirmation').val('<?php echo $key ?>&'+base64_encode(base64_encode(userPassword)));
        });



        jQuery('.user_pass').click(function () {
            var captcha = document.getElementById('captcha').value;
            var captchatext = document.getElementById('captchatext').value;
        });
    });

    function base64_encode(data) {
        var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
        var o1, o2, o3, h1, h2, h3, h4, bits, i = 0,
                ac = 0,
                enc = '',
                tmp_arr = [];

        if (!data) {
            return data;
        }

        do { // pack three octets into four hexets
            o1 = data.charCodeAt(i++);
            o2 = data.charCodeAt(i++);
            o3 = data.charCodeAt(i++);

            bits = o1 << 16 | o2 << 8 | o3;

            h1 = bits >> 18 & 0x3f;
            h2 = bits >> 12 & 0x3f;
            h3 = bits >> 6 & 0x3f;
            h4 = bits & 0x3f;

            // use hexets to index into b64, and append result to encoded string
            tmp_arr[ac++] = b64.charAt(h1) + b64.charAt(h2) + b64.charAt(h3) + b64.charAt(h4);
        } while (i < data.length);

        enc = tmp_arr.join('');

        var r = data.length % 3;

        return (r ? enc.slice(0, r - 3) : enc) + '==='.slice(r || 3);
    }







    $(function () {







        $("[name=email]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`<\>(\)/]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });

        $("[name=first_name]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`~!#$@%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });

        $("[name=last_name]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`~!#$@%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });

        $("[name=password]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`<\>(\)]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });

        $("[name=password]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`<\>(\)]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });

        $("[name=password_confirmation]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`<\>(\)]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });

        $("[name=captcha]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`<\>(\)]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });
    });
</script>