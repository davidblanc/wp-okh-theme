var oct8ne = document.createElement('script');
oct8ne.server = 'backoffice-eu.oct8ne.com/';
oct8ne.type = 'text/javascript';
oct8ne.async = true;
oct8ne.license = '2BDC799012B601213A16B8C97DEC5314';
oct8ne.src =
	(document.location.protocol == 'https:' ? 'https://' : 'http://') +
	'static-eu.oct8ne.com/api/v2/oct8ne-api-2.3.js?' +
	Math.round(new Date().getTime() / 86400000);
oct8ne.locale = 'es-ES';
oct8ne.baseUrl = '//okhumedades.com';
var s = document.getElementsByTagName('script')[0];
insertOct8ne();
function insertOct8ne() {
	s.parentNode.insertBefore(oct8ne, s);
}
