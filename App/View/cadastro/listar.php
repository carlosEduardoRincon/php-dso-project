<table>
    <tr>
        <td>Id</td>
        <td>Nome</td>
    </tr>
    <?php foreach($this->getView()->cadastro as $dado) { ?>
        <tr>
            <td><?php echo $dado->__get('idCad'); ?></td>
            <td><?php echo $dado->__get('nomeCad'); ?></td>
        </tr>
    <?php } ?>
</table>