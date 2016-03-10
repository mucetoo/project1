
<?php
include_once('includes/header.php');
?>

<div id="main">
<?php
echo "Форма за регистрация";
echo "<form action='autoparts.php' method='post'>";
input_type('<p>','</p>', 'fn','text', 'first_name ', '','Име* ');
input_type('<p>','</p>', 'sn', 'text', 'second_name', '', 'Фамилия ');
input_type('<p>','</p>', 'em', 'text', 'email', '', 'Email* ');
input_type('<p>','</p>','usr', 'text', 'username', '', 'Потребителско име* ');
input_type('<p>','</p>','ps', 'password', 'password', '', 'Парола* ');
input_type('<p>','</p>', 'check', 'checkbox', 'agreement ',  '', 'Съгласен съм с условията за ползване на сайта');
input_type('<p>','</p>','sub', 'submit', 'submit', 'Регисрация', '');
echo "</form>";
?>
</div>

<?php
include_once('includes/footer.php');
?>