(function() {
	tinymce.create('tinymce.plugins.salesoptimizer', {
	init : function(ed, url) {},
	createControl : function(n, cm) {
	if(n=='salesoptimizer'){
		var mlb = cm.createListBox('salesoptimizer', {
		title : 'Sales Optimizer',
		onselect : function(v) {
			if(tinyMCE.activeEditor.selection.getContent() == ''){
			tinyMCE.activeEditor.selection.setContent( v )
		}
		}
	});
	for(var i in my_shortcodes)
		mlb.add(my_shortcodes[i],my_shortcodes[i]);
		return mlb;
	}
		return null;
	}
	});
	tinymce.PluginManager.add('salesoptimizer', tinymce.plugins.salesoptimizer);
})();