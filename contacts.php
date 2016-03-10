
<?php
include_once('includes/header.php');
?>

<div id="main">
<?php
echo "За връзка с нас:
<p>gsm: 0888776655</p>
<p>email: cbr400rrbulgaria@abv.bg</p>";

echo "<form action='contacts.php method='post'>";
input_type('<p>','</p>', 'fn','text', 'first_name ', '','Име* ');
input_type('<p>','</p>', 'em', 'text', 'email', '', 'Email* ');
input_type('<p>','</p>','tel', 'text', 'telefon', '', 'Телефон ');
input_text('<p>', '</p>', 'Съобщение* ', '');
input_type('<p>','</p>','sub', 'submit', 'submit', 'Изпрати', '');
echo "</form>";
?>
</div>

<?php
include_once('includes/footer.php');
?>