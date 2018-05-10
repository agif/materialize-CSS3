var onKST = function(text) {
    // è¯·æ›¿æ¢æˆ"ç”Ÿæˆä»£ç  - é“¾æŽ¥åœ°å€" ä¸­çš„é“¾æŽ¥åœ°å€,ä¸è¦åŽ»å…¶ä»–åœ°æ–¹å¤åˆ¶
    // 
    // Klik di bawah untuk mengaktifkan chat
    // ksChatLink = 'assets/chatbox/im.htm?cas=54926___605571&fi=63440&ism=1';
     // * è‹¥å¼ºè¡Œæ‰“å¼€æ–°çª—å£,åˆ™æ”¾å¼€è®¾ç½®,ä¸è®¾ç½®åˆ™æ‰‹æœºä¸æ‰“å¼€æ–°çª—å£,pcæ‰“å¼€æ–°çª—å£,æ­¤è®¾ç½®åªå¯¹å½“å‰è‡ªå®šä¹‰äº‹ä»¶æœ‰æ•ˆ
     // * è‹¥æƒ³å…¨å±€ç”Ÿæ•ˆ,åŒ…æ‹¬å¿«å•†é€šé»˜è®¤çš„æ‰“å¼€èŠå¤©çª—å£äº‹ä»¶,åˆ™å°†æ­¤å˜é‡ksUserDefinedOpenNewChatWinå®šä¹‰åœ¨ks.jså‰å³å¯
     
    var ksUserDefinedOpenNewChatWin=true;	

    // éªŒè¯å‚æ•°æ˜¯å¦å­˜åœ¨
    function checkQueryString(params, name) {
        if (!params) return false;
        return new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i").test(params);
    }
    // èŽ·å–URLå‚æ•°å€¼
    function getQueryString(url, name) {
        var index = url.indexOf('?');
        if (index == -1) return '';
        url = url.substr(index + 1, url.length);
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = url.match(reg);
        if (r != null) return unescape(r[2]);
        return '';
    }
    var openNewChatWin;
    var localArr = ksChatLink.split("?");
    localArr.push("");
    if (typeof ksUserDefinedOpenNewChatWin != 'undefined' && ksUserDefinedOpenNewChatWin == true) {
        openNewChatWin = true;
    } else if (checkQueryString(localArr[1], 'ism')) {
        openNewChatWin = false;
    } else {
        openNewChatWin = true;
    }
    // æ‰“å¼€å¿«å•†é€šèŠå¤©çª—å£é“¾æŽ¥
    function ksOpenLink() {
        var appendTailUrl = '';
        try {
            var cas = getQueryString(ksChatLink, 'cas');
            if (cas) {
                var vi = '';
                var dc = document.cookie.match(new RegExp('(^| )' + cas + '_KS_' + cas + '=([^;]*)(;|$)'));
                if (dc != null) {
                    vi = unescape(dc[2]);
                }
                if (vi) {
                    appendTailUrl += '&vi=' + vi;
                }
            }
        } catch (e) {}
        var ref = "";
        try { if (opener.document.referrer.length > 0) { ref = opener.document.referrer; } } catch (e) { ref = document.referrer; }
        if (!ref || ref.length == 0) { ref = document.referrer; }
        // å¯¹è¯ç½‘å€
        appendTailUrl += '&dp=' + encodeURIComponent(window.location.href);
        // è®¿å®¢æ¥æº
        if (ref) appendTailUrl += '&ref=' + encodeURIComponent(ref);
        // å¯¹è¯æ ‡è¯†
        if (text) appendTailUrl += '&sText=' + encodeURIComponent(text);
        if (ksChatLink.indexOf('?') == -1) { appendTailUrl = appendTailUrl.substring(1) + '?'; }
        ksChatLink += appendTailUrl;
        // æ ¹æ®openNewChatWinè®¾ç½®æ‰“å¼€èŠå¤©çª—å£
        if (!openNewChatWin) {
            window.location.href = ksChatLink;
        } else {
            var ksWin = window.open(ksChatLink, '_blank');
            if (ksWin) {
                try { ksWin.focus(); } catch (e) {} //å°†ç„¦ç‚¹å®šä½åˆ°èŠå¤©çª—å£
            }
        }
    }
    // å¦‚æžœå¿«å•†é€šä»£ç æœ‰åŠ è½½å®Œæˆ,åˆ™ä½¿ç”¨å¿«å•†é€šé»˜è®¤çš„æ‰“å¼€èŠå¤©çª—å£äº‹ä»¶,å¦åˆ™ä½¿ç”¨è‡ªå®šä¹‰çš„æ‰“å¼€äº‹ä»¶
    if (typeof KS != 'undefined') {
        var p = {};
        if (text) p['sText'] = text;
        if (openNewChatWin) p['oTarget'] = '_blank';
        try {
            if (typeof KS.openChatWin == 'function') {
                KS.openChatWin(p);
            } else if (typeof KS.openChatLink == 'function') {
                KS.openChatLink(p);
            } else {
                ksOpenLink();
            }
        } catch (e) {
            ksOpenLink();
        }
    } else {
        ksOpenLink();
    }
};
