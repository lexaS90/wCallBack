var wCallBack = function (config) {
	config = config || {};
	wCallBack.superclass.constructor.call(this, config);
};
Ext.extend(wCallBack, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('wcallback', wCallBack);

wCallBack = new wCallBack();