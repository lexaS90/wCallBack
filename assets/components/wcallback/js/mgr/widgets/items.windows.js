wCallBack.window.CreateItem = function (config) {
	config = config || {};
	if (!config.id) {
		config.id = 'wcallback-item-window-create';
	}
	Ext.applyIf(config, {
		title: _('wcallback_item_create'),
		width: 550,
		autoHeight: true,
		url: wCallBack.config.connector_url,
		action: 'mgr/item/create',
		fields: this.getFields(config),
		keys: [{
			key: Ext.EventObject.ENTER, shift: true, fn: function () {
				this.submit()
			}, scope: this
		}]
	});
	wCallBack.window.CreateItem.superclass.constructor.call(this, config);
};
Ext.extend(wCallBack.window.CreateItem, MODx.Window, {

	getFields: function (config) {
		return [{
			xtype: 'textfield',
			fieldLabel: _('wcallback_item_name'),
			name: 'name',
			id: config.id + '-name',
			anchor: '99%',
			allowBlank: true,
		}, {
			xtype: 'textfield',
			fieldLabel: _('wcallback_item_mail'),
			name: 'mail',
			id: config.id + '-mail',
			anchor: '99%',
			allowBlank: true,
		}, {
			xtype: 'textfield',
			fieldLabel: _('wcallback_item_phone'),
			name: 'phone',
			id: config.id + '-phone',
			anchor: '99%',
			allowBlank: true,
		}, {
			xtype: 'textfield',
			fieldLabel: _('wcallback_item_category'),
			name: 'category',
			id: config.id + '-category',
			anchor: '99%',
			allowBlank: true,
		}, {
			xtype: 'xcheckbox',
			boxLabel: _('wcallback_item_active'),
			name: 'active',
			id: config.id + '-active',
			checked: true,
		}];
	},

	loadDropZones: function() {
	}

});
Ext.reg('wcallback-item-window-create', wCallBack.window.CreateItem);


wCallBack.window.UpdateItem = function (config) {
	config = config || {};
	if (!config.id) {
		config.id = 'wcallback-item-window-update';
	}
	Ext.applyIf(config, {
		title: _('wcallback_item_update'),
		width: 550,
		autoHeight: true,
		url: wCallBack.config.connector_url,
		action: 'mgr/item/update',
		fields: this.getFields(config),
		keys: [{
			key: Ext.EventObject.ENTER, shift: true, fn: function () {
				this.submit()
			}, scope: this
		}]
	});
	wCallBack.window.UpdateItem.superclass.constructor.call(this, config);
};
Ext.extend(wCallBack.window.UpdateItem, MODx.Window, {

	getFields: function (config) {
		return [{
			xtype: 'hidden',
			name: 'id',
			id: config.id + '-id',
		}, {
			xtype: 'textfield',
			fieldLabel: _('wcallback_item_name'),
			name: 'name',
			id: config.id + '-name',
			anchor: '99%',
			allowBlank: false,
		},  {
			xtype: 'textfield',
			fieldLabel: _('wcallback_item_mail'),
			name: 'mail',
			id: config.id + '-mail',
			anchor: '99%',
			allowBlank: true,
		}, {
			xtype: 'textfield',
			fieldLabel: _('wcallback_item_phone'),
			name: 'phone',
			id: config.id + '-phone',
			anchor: '99%',
			allowBlank: true,
		},  {
			xtype: 'textfield',
			fieldLabel: _('wcallback_item_category'),
			name: 'category',
			id: config.id + '-category',
			anchor: '99%',
			allowBlank: true,
		}, {
			xtype: 'xcheckbox',
			boxLabel: _('wcallback_item_active'),
			name: 'active',
			id: config.id + '-active',
		}];
	},

	loadDropZones: function() {
	}

});
Ext.reg('wcallback-item-window-update', wCallBack.window.UpdateItem);