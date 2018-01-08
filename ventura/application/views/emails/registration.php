<!DOCTYPE html>
&lt;html lang="en-US"&gt;
 &lt;head&gt;
  &lt;meta charset="utf-8"&gt;
 &lt;/head&gt;
 &lt;body&gt;
  <h2>Hello &lt;?php echo $firstname ;?&gt; , </h2>
  <p> Thank your for joining with our site </p>
  <p> Bellow is your account Info </p>
  <p>
   Email :  &lt;?php echo $email ?&gt; <br />
   Password :  &lt;?php echo $password ?&gt;<br />
  </p>
  <p> Please follow link activation  <a href="&lt;?php echo site_url('user/activation?code='.$code) ?&gt;."> Active my account now</a></p>
  <p> If the link now working , copy and paste link bellow </p>
  <p>  &lt;?php echo site_url('user/activation?code='.$code) ?&gt; </p> 
  <br /><br /><p> Thank You </p><br /><br />
  
   &lt;?php echo CNF_APPNAME ?&gt; 
 &lt;/body&gt;
&lt;/html&gt;