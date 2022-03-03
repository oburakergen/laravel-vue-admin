module.exports = {
    config: {
        NAVIGATOR: {
            TYPE: /(yabrowser|opera|chrome|crios|safari|firefox|msie|edge|edg|maxthon|trident|ubrowser|ucbrowser(?=\/))\/?\s*(\d+)/i,
            MOBILE: /iphone|ipod|(android(.*mobile))|blackberry|opera mini|opera mobi|skyfire|maemo|windows phone|iemobile|symbian|fennec/i,
            TABLET: /(ipad|tablet|(android(?!.*mobile))|(windows(?!.*phone)(.*touch))|playbook|(puffin(?!.*(IP|AP|WP))))/i,
        },
    },
};
