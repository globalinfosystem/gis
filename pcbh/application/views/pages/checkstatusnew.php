<style>
.ftbtn1 {
    background-color: #f39c12 !important;
    border: medium none;
    color: #fff !important;
    margin-top: 0;
    padding: 2px 29px !important;
}
</style>
<div class="title-bar dark-blue">Check Status </div>
<div class="main-box">
    <div class="collapse-box">
        <div class="top-space">
            <form method="post" action="<?php echo base_url();?>page/get_check_status_new" id="couselist" class="form-horizontal">
                <input type="hidden" value="<?php echo $this->security->get_csrf_hash(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>">
			  
					<div class="form-group">
					<label class="col-sm-4 control-label">Appeal OR Complaint Number</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="canumber" id="canumber">
					</div>
					<div class="col-sm-2">
						<input type="submit" value="Submit" class="btn ftbtn1 btn-blue" name="submit_player">
					</div>
				</div>
            </form>
            <script type="text/javascript">
$('document').ready( function (){
					$('#couselist').submit();
				});
                $('#couselist').submit(function (event) {
                    $('html, body').animate({scrollTop: 0}, 'slow');
                    event.preventDefault();
                    var formData = $(this).serialize();
                    call_page_loader(1);
                    $.ajax({
                        type: $(this).attr('method'),
                        url: $(this).attr('action'),
                        data: formData,
                        success: function (data) {
                            $('#showData').html(data);
                            $('html, body').animate({
                                scrollTop: $('#showData').offset().top
                            }, 2000);
                            call_page_loader(2);
                        },
                        error: function () {
                            alert('error in ajax form submission');
                        }
                    });
                    return false;
                });
				
		function check(i){
			if((i).length>0)
			document.getElementById("regNo").value = i.replace(/[^\d\d\d]+/g,'');
		} 
		
		function checkdisable1(){
			if((document.getElementById("name").value!==" ")||(document.getElementById("address").value!==" "))
			{		
				document.getElementById("regNo").disabled=true;
				document.getElementById("yearVal").disabled=true;
			}else{
				document.getElementById("name").disabled=false;
				document.getElementById("address").disabled=false;
			}
		}
		function checkdisable(){
			if((document.getElementById("regNo").value!=="")&&(document.getElementById("yearVal").value!==0))
			{		
				document.getElementById("name").disabled=true;
				document.getElementById("address").disabled=true;
			}else{		
				document.getElementById("name").disabled=false;
				document.getElementById("address").disabled=false;
			}
		}
            </script>
        </div>

    </div>

    <div id="showData" class="top-space">

    </div>
</div>