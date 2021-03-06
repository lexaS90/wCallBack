wCallBack.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'wcallback-panel-home',
		 stateEvents: ['tabchange'],
		 getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
		 */
		hideMode: 'offsets',
		items: [{
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			border: false,
			hideMode: 'offsets',
			items: [{
				title: _('wcallback_items'),
				layout: 'anchor',
				items: [{
					html: _('wcallback_intro_msg'),
					cls: 'panel-desc',
				}, {
					xtype: 'wcallback-grid-items',
					cls: 'main-wrapper',
				}]
			}]
		}]
	});
	wCallBack.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(wCallBack.panel.Home, MODx.Panel);
Ext.reg('wcallback-panel-home', wCallBack.panel.Home);
