<section id="signup">
	<h2>Register Today <small>It's free</small></h2>
	<form method="post" id="myform" action="<?=base_url();?>index.php/register" accept-charset="utf-8">
		<p>	
			<input class="name" type="text" name="first_name" placeholder="First Name" value="<?=set_value('first_name');?>" />
			<input class="name" type="text" name="last_name" placeholder="Last Name" value="<?=set_value('last_name');?>" />
		</p>
		<p>
			<input type="text" name="login" value="<?=set_value('login');?>"placeholder="Email Address" />
		</p>
		<p>
			<input id="myPassword" type="password" name="password" placeholder="Password" value="<?=set_value('password');?>" />
		</p>
		<p>
			<input id="myPassword" type="password" name="password_conf" placeholder="Re-enter Password"  value="<?=set_value('password_conf');?>"/>
		</p>
		<p>
			<input type="submit" name="submit" value="Sign Up" />
		</p>
	</form>
	<section class="clear"></section>
</section>