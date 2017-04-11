(function() {

/* Keep everything in BG variable
    augment existing variable if it exists.
*/
if ( !window.BG || typeof window.BG !== 'object') {
    window.BG = {};
}
var BG = window.BG;

BG.votdWriteCallback = function(json) {
    var votd = json.votd;
    var votd_html = '';
    votd_html += '<div>' + votd.text;
    votd_html += '<br/>- <a href="' + votd.permalink +'">' + votd.display_ref + '</a>';
    votd_html += ' <span class="w3-small"><a href="' + votd.copyrightlink + '">' + votd.copyright + '</a>';
    votd_html += '<br/><br/>Powered by <a rel="nofollow" target="_blank" href="https://www.biblegateway.com/">BibleGateway.com</a></span>';
    votd_html += '</div>';
    document.write(votd_html);
};

window.BG = BG;

})();