<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo curso</h1>
<form method="post" action="processa_curso.php">
    <br>
    <label>Nome curso:</label><br>
    <input type="text" name="nome_curso" placeholder="Insera o nome do curso">
    <br><br>
    <label>Carga horária</label><br>
    <input type="text" name="carga_horaria" placeholder="Insira a carga horária"><br><br>
    <input type="submit" value="Inserir curso">
</form>


<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
        <?php if($linha['id_curso'] == $_GET['editar']){ ?>

            <h1>Editar curso</h1>
            <form method="post" action="edita_curso.php">
                <input type="hiddeng" name="id_curso" value="<?php echo['id_curso']; ?>">
                <br>
                <label>Nome curso:</label><br>
                <input type="text" name="nome_curso" placeholder="Insera o nome do curso" value="<?php echo['nome_curso']; ?>">
                <br><br>
                <label>Carga horária</label><br>
                <input type="text" name="carga_horaria" placeholder="Insira a carga horária" value="<?php echo['carga_horaria']; ?>"><br><br>
                <input type="submit" value="Editar curso">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>
