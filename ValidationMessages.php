<?php 

if(isset($_SESSION['NameErrorZero']))
{
	$result = $_SESSION['NameErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['NameErrorZero']);
?>

<?php 
if(isset($_SESSION['NameErrorNull']))
{
	$result = $_SESSION['NameErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['NameErrorNull']);
?>

<?php 
if(isset($_SESSION['NameErrorMaxLength']))
{
	$result = $_SESSION['NameErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['NameErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['NameErrorMinLength']))
{
	$result = $_SESSION['NameErrorMinLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['NameErrorMinLength']);
?>

<?php 
if(isset($_SESSION['FoneErrorZero']))
{
	$result = $_SESSION['FoneErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['FoneErrorZero']);
?>

<?php 
if(isset($_SESSION['FoneErrorNull']))
{
	$result = $_SESSION['FoneErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['FoneErrorNull']);
?>

<?php 
if(isset($_SESSION['FoneErrorMaxLength']))
{
	$result = $_SESSION['FoneErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['FoneErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['EmailErrorInvalid']))
{
	$result = $_SESSION['EmailErrorInvalid'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['EmailErrorInvalid']);
?>

<?php 
if(isset($_SESSION['EmailErrorZero']))
{
	$result = $_SESSION['EmailErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['EmailErrorZero']);
?>

<?php 
if(isset($_SESSION['EmailErrorNull']))
{
	$result = $_SESSION['EmailErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['EmailErrorNull']);
?>

<?php 
if(isset($_SESSION['EmailErrorMaxLength']))
{
	$result = $_SESSION['EmailErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['EmailErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['EmailErrorExist']))
{
	$result = $_SESSION['EmailErrorExist'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['EmailErrorExist']);
?>

<?php 
if(isset($_SESSION['PasswordErrorZero']))
{
	$result = $_SESSION['PasswordErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['PasswordErrorZero']);
?>

<?php 
if(isset($_SESSION['PasswordErrorNull']))
{
	$result = $_SESSION['PasswordErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['PasswordErrorNull']);
?>

<?php 
if(isset($_SESSION['PasswordErrorMaxLength']))
{
	$result = $_SESSION['PasswordErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['PasswordErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['PasswordErrorMinLength']))
{
	$result = $_SESSION['PasswordErrorMinLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['PasswordErrorMinLength']);
?>

<?php 
if(isset($_SESSION['StreetErrorZero']))
{
	$result = $_SESSION['StreetErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['StreetErrorZero']);
?>

<?php 
if(isset($_SESSION['StreetErrorNull']))
{
	$result = $_SESSION['StreetErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['StreetErrorNull']);
?>

<?php 
if(isset($_SESSION['StreetErrorMaxLength']))
{
	$result = $_SESSION['StreetErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['StreetErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['NeighborhoodErrorZero']))
{
	$result = $_SESSION['NeighborhoodErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['NeighborhoodErrorZero']);
?>

<?php 
if(isset($_SESSION['NeighborhoodErrorNull']))
{
	$result = $_SESSION['NeighborhoodErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['NeighborhoodErrorNull']);
?>

<?php 
if(isset($_SESSION['NeighborhoodErrorMaxLength']))
{
	$result = $_SESSION['NeighborhoodErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['NeighborhoodErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['CityErrorZero']))
{
	$result = $_SESSION['CityErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CityErrorZero']);
?>

<?php 
if(isset($_SESSION['CityErrorNull']))
{
	$result = $_SESSION['CityErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CityErrorNull']);
?>

<?php 
if(isset($_SESSION['CityErrorMaxLength']))
{
	$result = $_SESSION['CityErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CityErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['UFErrorZero']))
{
	$result = $_SESSION['UFErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['UFErrorZero']);
?>

<?php 
if(isset($_SESSION['UFErrorNull']))
{
	$result = $_SESSION['UFErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['UFErrorNull']);
?>

<?php 
if(isset($_SESSION['UFErrorMaxLength']))
{
	$result = $_SESSION['UFErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['UFErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['IBGEErrorZero']))
{
	$result = $_SESSION['IBGEErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['IBGEErrorZero']);
?>

<?php 
if(isset($_SESSION['IBGEErrorNull']))
{
	$result = $_SESSION['IBGEErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['IBGEErrorNull']);
?>

<?php 
if(isset($_SESSION['IBGEErrorMaxLength']))
{
	$result = $_SESSION['IBGEErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['IBGEErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['DescriptionErrorZero']))
{
	$result = $_SESSION['DescriptionErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['DescriptionErrorZero']);
?>

<?php 
if(isset($_SESSION['DescriptionErrorNull']))
{
	$result = $_SESSION['DescriptionErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['DescriptionErrorNull']);
?>

<?php 
if(isset($_SESSION['TypeErrorInvalid']))
{
	$result = $_SESSION['TypeErrorInvalid'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TypeErrorInvalid']);
?>

<?php 
if(isset($_SESSION['TypeErrorNull']))
{
	$result = $_SESSION['TypeErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TypeErrorNull']);
?>

<?php 
if(isset($_SESSION['CPFErrorInvalid']))
{
	$result = $_SESSION['CPFErrorInvalid'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CPFErrorInvalid']);
?>

<?php 
if(isset($_SESSION['CNPJErrorInvalid']))
{
	$result = $_SESSION['CNPJErrorInvalid'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CNPJErrorInvalid']);
?>

<?php 
if(isset($_SESSION['TypeErrorNotSelect']))
{
	$result = $_SESSION['TypeErrorNotSelect'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TypeErrorNotSelect']);
?>

<?php 
if(isset($_SESSION['DatabaseError']))
{
	$result = $_SESSION['DatabaseError'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['DatabaseError']);
?>

<?php 
if(isset($_SESSION['CPFErrorExist']))
{
	$result = $_SESSION['CPFErrorExist'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CPFErrorExist']);
?>

<?php 
if(isset($_SESSION['CNPJErrorExist']))
{
	$result = $_SESSION['CNPJErrorExist'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['CNPJErrorExist']);
?>

<?php 
if(isset($_SESSION['ErroDatabase']))
{
	$result = $_SESSION['ErroDatabase'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['ErroDatabase']);
?>

<?php 
if(isset($_SESSION['AlterSuccess']))
{
	$result = $_SESSION['AlterSuccess'];
?>
	<p class="alert alert-success"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['AlterSuccess']);
?>

<?php 
if(isset($_SESSION['AlterError']))
{
	$result = $_SESSION['AlterError'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['AlterError']);
?>

<?php 
if(isset($_SESSION['UserNotFound']))
{
	$result = $_SESSION['UserNotFound'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['UserNotFound']);
?>

<?php 
if(isset($_SESSION['AlterPasswordSuccess']))
{
	$result = $_SESSION['AlterPasswordSuccess'];
?>
	<p class="alert alert-success"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['AlterPasswordSuccess']);
?>

<?php 
if(isset($_SESSION['TitleErrorZero']))
{
	$result = $_SESSION['TitleErrorZero'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TitleErrorZero']);
?>

<?php 
if(isset($_SESSION['TitleErrorNull']))
{
	$result = $_SESSION['TitleErrorNull'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TitleErrorNull']);
?>

<?php 
if(isset($_SESSION['TitleErrorMaxLength']))
{
	$result = $_SESSION['TitleErrorMaxLength'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['TitleErrorMaxLength']);
?>

<?php 
if(isset($_SESSION['ProductRegisterSuccess']))
{
	$result = $_SESSION['ProductRegisterSuccess'];
?>
	<p class="alert alert-success"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['ProductRegisterSuccess']);
?>

<?php 
if(isset($_SESSION['ProductRegisterError']))
{
	$result = $_SESSION['ProductRegisterError'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['ProductRegisterError']);
?>

<?php 
if(isset($_SESSION['ProductRemoveSuccess']))
{
	$result = $_SESSION['ProductRemoveSuccess'];
?>
	<p class="alert alert-success"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['ProductRemoveSuccess']);
?>

<?php 
if(isset($_SESSION['ProductRemoveError']))
{
	$result = $_SESSION['ProductRemoveError'];
?>
	<p class="alert alert-danger"><?php echo $result ?></p>
<?php 
}
unset($_SESSION['ProductRemoveError']);
?>