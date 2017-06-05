<main class="container" >
<section >
    <header>
        <h2>Order</h2>
        <p>
            <a class="btn btn-success" href="<?= base_url();?>index.php/orderCtrl/create" >
                Create New Order
            </a>
        </p>
    </header>
</section>

<section >
<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
<?php
    foreach($data as $row){
        $cols=array_keys(get_object_vars($row));
        foreach($cols as $column)
        {
            echo '<th>'.strtoupper(str_replace('_',' ',$column)).'</th>';
        }
        echo '<th style="text-align:center;min-width:220px;">ACTIONS</th>';

        break;
    }    
?>
    </thead>
    <tbody>
        <?php
foreach($data as $row)
{
   
    echo '<tr>';
    foreach($row as $value){
       echo '<td>'.$value.'</td>';
    }
    echo '<td ><a class="btn btn-info" href="'.base_url().'index.php/orderCtrl/view/'.$row->order_id.'" >View</a> ';
    echo '<a class="btn btn-success" href="'.base_url().'index.php/orderCtrl/edit/'.$row->order_id.'" >Edit</a> ';
    echo '<a class="btn btn-danger" href="'.base_url().'index.php/orderCtrl/delete/'.$row->order_id.'" >Delete</a></td>';
    echo '</tr>';
}
?>
    </tbody>
    <tfoot>
    </tfoot>
</table>
</section>
</main>