.XulMenu {
    font-family: georgia, tahoma, verdana;
    font-size: 11px;
    -moz-user-select: none;
}
.XulMenu .button,
.XulMenu .button:hover,
.XulMenu .button-active,
.XulMenu .button-active:hover {
    line-height: normal;
    padding: 4px 8px 3px 8px;
    border: 1px solid #ECE9D8;
    color: #000000;
    text-decoration: none;
    cursor: default;
    white-space: nowrap;
    display: block;
    position: relative;
}
.XulMenu .button:hover {
    border-color: #ffffff #ACA899 #ACA899 #ffffff;
}
.XulMenu .button-active,
.XulMenu .button-active:hover {
    border-color: #ACA899 #ffffff #ffffff #ACA899;
}
.XulMenu .item,
.XulMenu .item:hover,
.XulMenu .item-active,
.XulMenu .item-active:hover {
    background: #ffffff;
    line-height: normal;
    padding: 3px 30px 3px 20px;
    color: #000000;
    text-decoration: none;
    cursor: default;
    white-space: nowrap;
    display: block;
    position: relative;
}
.XulMenu .item:hover,
.XulMenu .item-active,
.XulMenu .item-active:hover {
    background: #316AC5;
    color: #ffffff;
}
.XulMenu .section {
    background: #ffffff;
    border: 1px solid;
    border-color: #F1EFE2 #716F64 #716F64 #F1EFE2;
    padding: 2px 1px 1px 2px;
    position: absolute;
    visibility: hidden;
    z-index: -1;
    margin-top: 25px;
}
.XulMenu .arrow {
    position: absolute;
    top: 7px;
    right: 8px;
    border: 0;
}
.XulMenu .hr {
    font-size: 0px;
    border-width: 1px;
    border-color: #aca899;
    border-style: solid none none none;
    margin-top: 2px;
    margin-bottom: 2px;
    margin-left: 4px;
    margin-right: 4px;
}

* html .XulMenu td { position: relative; } /* ie 5.0 fix */