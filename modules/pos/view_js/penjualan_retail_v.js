valid_script = true;  
ajax_url = 'ajax.handler.php?id=' + page;  

var winprint_01 = new Ext.Panel({
  height: 800, 
  width: 1280, 
  title: 'Point of Sales', 
  html: '<?php $urlmodule = '+urlmodule_pos+'; ?><iframe style="display:block;" src="'+urlmodule_pos+'index.php?mn=penjualan_retail" height=100% width=100% align="left"></iframe>',
  id: 'laporan',
  autoScroll:false
});

var main_content = {
  id : id_panel,  
  title:n.text,  
  iconCls:n.attributes.iconCls,
  autoScroll:true,  
  items : [winprint_01]
}; 