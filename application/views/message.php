<?php if ($this->session->has_userdata('success')) { ?>
    <div class="alert alert-success alert-dismissible " role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span>
        </button>
        <i class="icon fa fa-check"></i>
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php } ?>
<?php if ($this->session->has_userdata('error')) { ?>
    <div class="alert alert-danger alert-dismissible " role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span>
        </button>
        <i class="icon fa fa-ban"></i>
        <?= strip_tags(str_replace('</p>', '', $this->session->flashdata('error'))) ?>
    </div>
<?php } ?>