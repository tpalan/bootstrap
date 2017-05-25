<?php
/**
 *
 * Part of the QCubed PHP framework.
 *
 * @license MIT
 *
 */

namespace QCubed\Bootstrap;

use QCubed as Q;

/**
 * If you are compiling your own bootstrap css file, point to it with the QCUBED_BOOTSTRAP_CSS define. Otherwise it will take
 * the default one from the bootstrap distribution.
 */
if (!defined('QCUBED_BOOTSTRAP_CSS')) {
    define('QCUBED_BOOTSTRAP_CSS', QCUBED_VENDOR_URL . '/twbs/bootstrap/dist/css/bootstrap.min.css');
}

/**
 * Define QCUBED_BOOTSTRAP_JS to handle your own loading of the bootstrap js files. Bootstrap includes a minimized version
 * and a non-minimized version.
 */
if (!defined('QCUBED_BOOTSTRAP_JS')) {
    define('QCUBED_BOOTSTRAP_JS', QCUBED_VENDOR_URL . '/twbs/bootstrap/dist/js/bootstrap.min.js');
}

if (!defined('QCUBED_BOOTSTRAP_ASSETS_URL')) {
    define('QCUBED_BOOTSTRAP_ASSETS_URL', QCUBED_BASE_URL . '/bootstrap/assets');
}


/**
 * Class Bootstrap
 *
 * @package QCubed\Bootstrap
 * @was QCubed\Plugin\Bootstrap
 */
abstract class Bootstrap
{
    /** Generated by GlyphiconGen.php */
    const GLYPHICON_ASTERISK = "glyphicon-asterisk";
    const GLYPHICON_PLUS = "glyphicon-plus";
    const GLYPHICON_EURO = "glyphicon-euro";
    const GLYPHICON_MINUS = "glyphicon-minus";
    const GLYPHICON_CLOUD = "glyphicon-cloud";
    const GLYPHICON_ENVELOPE = "glyphicon-envelope";
    const GLYPHICON_PENCIL = "glyphicon-pencil";
    const GLYPHICON_GLASS = "glyphicon-glass";
    const GLYPHICON_MUSIC = "glyphicon-music";
    const GLYPHICON_SEARCH = "glyphicon-search";
    const GLYPHICON_HEART = "glyphicon-heart";
    const GLYPHICON_STAR = "glyphicon-star";
    const GLYPHICON_STAR_EMPTY = "glyphicon-star-empty";
    const GLYPHICON_USER = "glyphicon-user";
    const GLYPHICON_FILM = "glyphicon-film";
    const GLYPHICON_TH_LARGE = "glyphicon-th-large";
    const GLYPHICON_TH = "glyphicon-th";
    const GLYPHICON_TH_LIST = "glyphicon-th-list";
    const GLYPHICON_OK = "glyphicon-ok";
    const GLYPHICON_REMOVE = "glyphicon-remove";
    const GLYPHICON_ZOOM_IN = "glyphicon-zoom-in";
    const GLYPHICON_ZOOM_OUT = "glyphicon-zoom-out";
    const GLYPHICON_OFF = "glyphicon-off";
    const GLYPHICON_SIGNAL = "glyphicon-signal";
    const GLYPHICON_COG = "glyphicon-cog";
    const GLYPHICON_TRASH = "glyphicon-trash";
    const GLYPHICON_HOME = "glyphicon-home";
    const GLYPHICON_FILE = "glyphicon-file";
    const GLYPHICON_TIME = "glyphicon-time";
    const GLYPHICON_ROAD = "glyphicon-road";
    const GLYPHICON_DOWNLOAD_ALT = "glyphicon-download-alt";
    const GLYPHICON_DOWNLOAD = "glyphicon-download";
    const GLYPHICON_UPLOAD = "glyphicon-upload";
    const GLYPHICON_INBOX = "glyphicon-inbox";
    const GLYPHICON_PLAY_CIRCLE = "glyphicon-play-circle";
    const GLYPHICON_REPEAT = "glyphicon-repeat";
    const GLYPHICON_REFRESH = "glyphicon-refresh";
    const GLYPHICON_LIST_ALT = "glyphicon-list-alt";
    const GLYPHICON_LOCK = "glyphicon-lock";
    const GLYPHICON_FLAG = "glyphicon-flag";
    const GLYPHICON_HEADPHONES = "glyphicon-headphones";
    const GLYPHICON_VOLUME_OFF = "glyphicon-volume-off";
    const GLYPHICON_VOLUME_DOWN = "glyphicon-volume-down";
    const GLYPHICON_VOLUME_UP = "glyphicon-volume-up";
    const GLYPHICON_QRCODE = "glyphicon-qrcode";
    const GLYPHICON_BARCODE = "glyphicon-barcode";
    const GLYPHICON_TAG = "glyphicon-tag";
    const GLYPHICON_TAGS = "glyphicon-tags";
    const GLYPHICON_BOOK = "glyphicon-book";
    const GLYPHICON_BOOKMARK = "glyphicon-bookmark";
    const GLYPHICON_PRINT = "glyphicon-print";
    const GLYPHICON_CAMERA = "glyphicon-camera";
    const GLYPHICON_FONT = "glyphicon-font";
    const GLYPHICON_BOLD = "glyphicon-bold";
    const GLYPHICON_ITALIC = "glyphicon-italic";
    const GLYPHICON_TEXT_HEIGHT = "glyphicon-text-height";
    const GLYPHICON_TEXT_WIDTH = "glyphicon-text-width";
    const GLYPHICON_ALIGN_LEFT = "glyphicon-align-left";
    const GLYPHICON_ALIGN_CENTER = "glyphicon-align-center";
    const GLYPHICON_ALIGN_RIGHT = "glyphicon-align-right";
    const GLYPHICON_ALIGN_JUSTIFY = "glyphicon-align-justify";
    const GLYPHICON_LIST = "glyphicon-list";
    const GLYPHICON_INDENT_LEFT = "glyphicon-indent-left";
    const GLYPHICON_INDENT_RIGHT = "glyphicon-indent-right";
    const GLYPHICON_FACETIME_VIDEO = "glyphicon-facetime-video";
    const GLYPHICON_PICTURE = "glyphicon-picture";
    const GLYPHICON_MAP_MARKER = "glyphicon-map-marker";
    const GLYPHICON_ADJUST = "glyphicon-adjust";
    const GLYPHICON_TINT = "glyphicon-tint";
    const GLYPHICON_EDIT = "glyphicon-edit";
    const GLYPHICON_SHARE = "glyphicon-share";
    const GLYPHICON_CHECK = "glyphicon-check";
    const GLYPHICON_MOVE = "glyphicon-move";
    const GLYPHICON_STEP_BACKWARD = "glyphicon-step-backward";
    const GLYPHICON_FAST_BACKWARD = "glyphicon-fast-backward";
    const GLYPHICON_BACKWARD = "glyphicon-backward";
    const GLYPHICON_PLAY = "glyphicon-play";
    const GLYPHICON_PAUSE = "glyphicon-pause";
    const GLYPHICON_STOP = "glyphicon-stop";
    const GLYPHICON_FORWARD = "glyphicon-forward";
    const GLYPHICON_FAST_FORWARD = "glyphicon-fast-forward";
    const GLYPHICON_STEP_FORWARD = "glyphicon-step-forward";
    const GLYPHICON_EJECT = "glyphicon-eject";
    const GLYPHICON_CHEVRON_LEFT = "glyphicon-chevron-left";
    const GLYPHICON_CHEVRON_RIGHT = "glyphicon-chevron-right";
    const GLYPHICON_PLUS_SIGN = "glyphicon-plus-sign";
    const GLYPHICON_MINUS_SIGN = "glyphicon-minus-sign";
    const GLYPHICON_REMOVE_SIGN = "glyphicon-remove-sign";
    const GLYPHICON_OK_SIGN = "glyphicon-ok-sign";
    const GLYPHICON_QUESTION_SIGN = "glyphicon-question-sign";
    const GLYPHICON_INFO_SIGN = "glyphicon-info-sign";
    const GLYPHICON_SCREENSHOT = "glyphicon-screenshot";
    const GLYPHICON_REMOVE_CIRCLE = "glyphicon-remove-circle";
    const GLYPHICON_OK_CIRCLE = "glyphicon-ok-circle";
    const GLYPHICON_BAN_CIRCLE = "glyphicon-ban-circle";
    const GLYPHICON_ARROW_LEFT = "glyphicon-arrow-left";
    const GLYPHICON_ARROW_RIGHT = "glyphicon-arrow-right";
    const GLYPHICON_ARROW_UP = "glyphicon-arrow-up";
    const GLYPHICON_ARROW_DOWN = "glyphicon-arrow-down";
    const GLYPHICON_SHARE_ALT = "glyphicon-share-alt";
    const GLYPHICON_RESIZE_FULL = "glyphicon-resize-full";
    const GLYPHICON_RESIZE_SMALL = "glyphicon-resize-small";
    const GLYPHICON_EXCLAMATION_SIGN = "glyphicon-exclamation-sign";
    const GLYPHICON_GIFT = "glyphicon-gift";
    const GLYPHICON_LEAF = "glyphicon-leaf";
    const GLYPHICON_FIRE = "glyphicon-fire";
    const GLYPHICON_EYE_OPEN = "glyphicon-eye-open";
    const GLYPHICON_EYE_CLOSE = "glyphicon-eye-close";
    const GLYPHICON_WARNING_SIGN = "glyphicon-warning-sign";
    const GLYPHICON_PLANE = "glyphicon-plane";
    const GLYPHICON_CALENDAR = "glyphicon-calendar";
    const GLYPHICON_RANDOM = "glyphicon-random";
    const GLYPHICON_COMMENT = "glyphicon-comment";
    const GLYPHICON_MAGNET = "glyphicon-magnet";
    const GLYPHICON_CHEVRON_UP = "glyphicon-chevron-up";
    const GLYPHICON_CHEVRON_DOWN = "glyphicon-chevron-down";
    const GLYPHICON_RETWEET = "glyphicon-retweet";
    const GLYPHICON_SHOPPING_CART = "glyphicon-shopping-cart";
    const GLYPHICON_FOLDER_CLOSE = "glyphicon-folder-close";
    const GLYPHICON_FOLDER_OPEN = "glyphicon-folder-open";
    const GLYPHICON_RESIZE_VERTICAL = "glyphicon-resize-vertical";
    const GLYPHICON_RESIZE_HORIZONTAL = "glyphicon-resize-horizontal";
    const GLYPHICON_HDD = "glyphicon-hdd";
    const GLYPHICON_BULLHORN = "glyphicon-bullhorn";
    const GLYPHICON_BELL = "glyphicon-bell";
    const GLYPHICON_CERTIFICATE = "glyphicon-certificate";
    const GLYPHICON_THUMBS_UP = "glyphicon-thumbs-up";
    const GLYPHICON_THUMBS_DOWN = "glyphicon-thumbs-down";
    const GLYPHICON_HAND_RIGHT = "glyphicon-hand-right";
    const GLYPHICON_HAND_LEFT = "glyphicon-hand-left";
    const GLYPHICON_HAND_UP = "glyphicon-hand-up";
    const GLYPHICON_HAND_DOWN = "glyphicon-hand-down";
    const GLYPHICON_CIRCLE_ARROW_RIGHT = "glyphicon-circle-arrow-right";
    const GLYPHICON_CIRCLE_ARROW_LEFT = "glyphicon-circle-arrow-left";
    const GLYPHICON_CIRCLE_ARROW_UP = "glyphicon-circle-arrow-up";
    const GLYPHICON_CIRCLE_ARROW_DOWN = "glyphicon-circle-arrow-down";
    const GLYPHICON_GLOBE = "glyphicon-globe";
    const GLYPHICON_WRENCH = "glyphicon-wrench";
    const GLYPHICON_TASKS = "glyphicon-tasks";
    const GLYPHICON_FILTER = "glyphicon-filter";
    const GLYPHICON_BRIEFCASE = "glyphicon-briefcase";
    const GLYPHICON_FULLSCREEN = "glyphicon-fullscreen";
    const GLYPHICON_DASHBOARD = "glyphicon-dashboard";
    const GLYPHICON_PAPERCLIP = "glyphicon-paperclip";
    const GLYPHICON_HEART_EMPTY = "glyphicon-heart-empty";
    const GLYPHICON_LINK = "glyphicon-link";
    const GLYPHICON_PHONE = "glyphicon-phone";
    const GLYPHICON_PUSHPIN = "glyphicon-pushpin";
    const GLYPHICON_USD = "glyphicon-usd";
    const GLYPHICON_GBP = "glyphicon-gbp";
    const GLYPHICON_SORT = "glyphicon-sort";
    const GLYPHICON_SORT_BY_ALPHABET = "glyphicon-sort-by-alphabet";
    const GLYPHICON_SORT_BY_ALPHABET_ALT = "glyphicon-sort-by-alphabet-alt";
    const GLYPHICON_SORT_BY_ORDER = "glyphicon-sort-by-order";
    const GLYPHICON_SORT_BY_ORDER_ALT = "glyphicon-sort-by-order-alt";
    const GLYPHICON_SORT_BY_ATTRIBUTES = "glyphicon-sort-by-attributes";
    const GLYPHICON_SORT_BY_ATTRIBUTES_ALT = "glyphicon-sort-by-attributes-alt";
    const GLYPHICON_UNCHECKED = "glyphicon-unchecked";
    const GLYPHICON_EXPAND = "glyphicon-expand";
    const GLYPHICON_COLLAPSE_DOWN = "glyphicon-collapse-down";
    const GLYPHICON_COLLAPSE_UP = "glyphicon-collapse-up";
    const GLYPHICON_LOG_IN = "glyphicon-log-in";
    const GLYPHICON_FLASH = "glyphicon-flash";
    const GLYPHICON_LOG_OUT = "glyphicon-log-out";
    const GLYPHICON_NEW_WINDOW = "glyphicon-new-window";
    const GLYPHICON_RECORD = "glyphicon-record";
    const GLYPHICON_SAVE = "glyphicon-save";
    const GLYPHICON_OPEN = "glyphicon-open";
    const GLYPHICON_SAVED = "glyphicon-saved";
    const GLYPHICON_IMPORT = "glyphicon-import";
    const GLYPHICON_EXPORT = "glyphicon-export";
    const GLYPHICON_SEND = "glyphicon-send";
    const GLYPHICON_FLOPPY_DISK = "glyphicon-floppy-disk";
    const GLYPHICON_FLOPPY_SAVED = "glyphicon-floppy-saved";
    const GLYPHICON_FLOPPY_REMOVE = "glyphicon-floppy-remove";
    const GLYPHICON_FLOPPY_SAVE = "glyphicon-floppy-save";
    const GLYPHICON_FLOPPY_OPEN = "glyphicon-floppy-open";
    const GLYPHICON_CREDIT_CARD = "glyphicon-credit-card";
    const GLYPHICON_TRANSFER = "glyphicon-transfer";
    const GLYPHICON_CUTLERY = "glyphicon-cutlery";
    const GLYPHICON_HEADER = "glyphicon-header";
    const GLYPHICON_COMPRESSED = "glyphicon-compressed";
    const GLYPHICON_EARPHONE = "glyphicon-earphone";
    const GLYPHICON_PHONE_ALT = "glyphicon-phone-alt";
    const GLYPHICON_TOWER = "glyphicon-tower";
    const GLYPHICON_STATS = "glyphicon-stats";
    const GLYPHICON_SD_VIDEO = "glyphicon-sd-video";
    const GLYPHICON_HD_VIDEO = "glyphicon-hd-video";
    const GLYPHICON_SUBTITLES = "glyphicon-subtitles";
    const GLYPHICON_SOUND_STEREO = "glyphicon-sound-stereo";
    const GLYPHICON_SOUND_DOLBY = "glyphicon-sound-dolby";
    const GLYPHICON_SOUND51 = "glyphicon-sound-5-1";
    const GLYPHICON_SOUND61 = "glyphicon-sound-6-1";
    const GLYPHICON_SOUND71 = "glyphicon-sound-7-1";
    const GLYPHICON_COPYRIGHT_MARK = "glyphicon-copyright-mark";
    const GLYPHICON_REGISTRATION_MARK = "glyphicon-registration-mark";
    const GLYPHICON_CLOUD_DOWNLOAD = "glyphicon-cloud-download";
    const GLYPHICON_CLOUD_UPLOAD = "glyphicon-cloud-upload";
    const GLYPHICON_TREE_CONIFER = "glyphicon-tree-conifer";
    const GLYPHICON_TREE_DECIDUOUS = "glyphicon-tree-deciduous";
    const GLYPHICON_CD = "glyphicon-cd";
    const GLYPHICON_SAVE_FILE = "glyphicon-save-file";
    const GLYPHICON_OPEN_FILE = "glyphicon-open-file";
    const GLYPHICON_LEVEL_UP = "glyphicon-level-up";
    const GLYPHICON_COPY = "glyphicon-copy";
    const GLYPHICON_PASTE = "glyphicon-paste";
    const GLYPHICON_DOOR = "glyphicon-door";
    const GLYPHICON_KEY = "glyphicon-key";
    const GLYPHICON_ALERT = "glyphicon-alert";
    const GLYPHICON_EQUALIZER = "glyphicon-equalizer";
    const GLYPHICON_KING = "glyphicon-king";
    const GLYPHICON_QUEEN = "glyphicon-queen";
    const GLYPHICON_PAWN = "glyphicon-pawn";
    const GLYPHICON_BISHOP = "glyphicon-bishop";
    const GLYPHICON_KNIGHT = "glyphicon-knight";
    const GLYPHICON_BABY_FORMULA = "glyphicon-baby-formula";
    const GLYPHICON_TENT = "glyphicon-tent";
    const GLYPHICON_BLACKBOARD = "glyphicon-blackboard";
    const GLYPHICON_BED = "glyphicon-bed";
    const GLYPHICON_APPLE = "glyphicon-apple";
    const GLYPHICON_ERASE = "glyphicon-erase";
    const GLYPHICON_HOURGLASS = "glyphicon-hourglass";
    const GLYPHICON_LAMP = "glyphicon-lamp";
    const GLYPHICON_DUPLICATE = "glyphicon-duplicate";
    const GLYPHICON_PIGGY_BANK = "glyphicon-piggy-bank";
    const GLYPHICON_SCISSORS = "glyphicon-scissors";
    const GLYPHICON_BITCOIN = "glyphicon-bitcoin";
    const GLYPHICON_YEN = "glyphicon-yen";
    const GLYPHICON_RUBLE = "glyphicon-ruble";
    const GLYPHICON_SCALE = "glyphicon-scale";
    const GLYPHICON_ICE_LOLLY = "glyphicon-ice-lolly";
    const GLYPHICON_ICE_LOLLY_TASTED = "glyphicon-ice-lolly-tasted";
    const GLYPHICON_EDUCATION = "glyphicon-education";
    const GLYPHICON_OPTION_HORIZONTAL = "glyphicon-option-horizontal";
    const GLYPHICON_OPTION_VERTICAL = "glyphicon-option-vertical";
    const GLYPHICON_MENU_HAMBURGER = "glyphicon-menu-hamburger";
    const GLYPHICON_MODAL_WINDOW = "glyphicon-modal-window";
    const GLYPHICON_OIL = "glyphicon-oil";
    const GLYPHICON_GRAIN = "glyphicon-grain";
    const GLYPHICON_SUNGLASSES = "glyphicon-sunglasses";
    const GLYPHICON_TEXT_SIZE = "glyphicon-text-size";
    const GLYPHICON_TEXT_COLOR = "glyphicon-text-color";
    const GLYPHICON_TEXT_BACKGROUND = "glyphicon-text-background";
    const GLYPHICON_OBJECT_ALIGN_TOP = "glyphicon-object-align-top";
    const GLYPHICON_OBJECT_ALIGN_BOTTOM = "glyphicon-object-align-bottom";
    const GLYPHICON_OBJECT_ALIGN_HORIZONTAL = "glyphicon-object-align-horizontal";
    const GLYPHICON_OBJECT_ALIGN_LEFT = "glyphicon-object-align-left";
    const GLYPHICON_OBJECT_ALIGN_VERTICAL = "glyphicon-object-align-vertical";
    const GLYPHICON_OBJECT_ALIGN_RIGHT = "glyphicon-object-align-right";
    const GLYPHICON_TRIANGLE_RIGHT = "glyphicon-triangle-right";
    const GLYPHICON_TRIANGLE_LEFT = "glyphicon-triangle-left";
    const GLYPHICON_TRIANGLE_BOTTOM = "glyphicon-triangle-bottom";
    const GLYPHICON_TRIANGLE_TOP = "glyphicon-triangle-top";
    const GLYPHICON_CONSOLE = "glyphicon-console";
    const GLYPHICON_SUPERSCRIPT = "glyphicon-superscript";
    const GLYPHICON_SUBSCRIPT = "glyphicon-subscript";
    const GLYPHICON_MENU_LEFT = "glyphicon-menu-left";
    const GLYPHICON_MENU_RIGHT = "glyphicon-menu-right";
    const GLYPHICON_MENU_DOWN = "glyphicon-menu-down";
    const GLYPHICON_MENU_UP = "glyphicon-menu-up";

    /** Containers */
    const CONTAINER = "container";
    const CONTAINER_FLUID = "container-fluid";

    /** Sizes */
    const EXTRA_SMALL = "xs";    // <768 px width
    const SMALL = "sm";            // <992
    const MEDIUM = "md";        // <1200
    const LARGE = "lg";            // > 1200
    const PRINT_SIZE = "print";    // printing only

    /** Text Classes */
    const TEXT_LEFT = "text-left";
    const TEXT_CENTER = "text-center";
    const TEXT_RIGHT = "text-right";
    const TEXT_JUSTIFY = "text-justify";
    const TEXT_NOWRAP = "text-nowrap";

    const TEXT_LOWERCASE = "text-lowercase";
    const TEXT_UPPERCASE = "text-uppercase";
    const TEXT_CAPITALIZE = "text-capitalize";

    const TEXT_MUTED = "text-muted";
    const TEXT_PRIMARY = "text-primary";
    const TEXT_SUCCESS = "text-success";
    const TEXT_INFO = "text-info";
    const TEXT_WARNING = "text-warning";
    const TEXT_DANGER = "text-danger";

    /** List Classes */
    const LIST_UNSTYLED = "list-unstyled";
    const LIST_INLINE = "list-inline";

    /** Table Classes */
    const TABLE = "table";
    const TABLE_STRIPED = "table-striped";
    const TABLE_BORDERED = "table-bordered";
    const TABLE_HOVER = "table-hover";
    const TABLE_CONDENSED = "table-condensed";
    const TABLE_RESPONSIVE = "table-responsive";

    /** Contextual Classes */
    const ACTIVE = "active";
    const SUCCESS = "success";
    const WARNING = "warning";
    const DANGER = "danger";
    const INFO = "info";

    /** Forms */
    const FORM_GROUP = "form-group";
    const FORM_INLINE = "form-inline";
    const FORM_HORIZONTAL = "form-horizontal";
    const FORM_CONTROL = "form-control";
    const FORM_CONTROL_STATIC = "form-control-static";
    const FORM_CONTROL_FEEDBACK = "form-control-feedback";

    /** Heights within a form group */
    const FORM_GROUP_LARGE = "form-group-lg";
    const FORM_GROUP_SMALL = "form-group-sm";

    const INPUT_GROUP = "input-group";
    const INPUT_GROUP_ADDON = "input-group-addon";
    const INPUT_GROUP_LARGE = "input-group-lg";
    const INPUT_GROUP_MEDIUM = ""; // default
    const INPUT_GROUP_SMALL = "input-group-sm";

    const INPUT_LARGE = "input-lg";
    const INPUT_SMALL = "input-sm";

    const BUTTON = "btn";
    const BUTTON_DEFAULT = "btn-default";
    const BUTTON_PRIMARY = "btn-primary";
    const BUTTON_SUCCESS = "btn-success";
    const BUTTON_INFO = "btn-info";
    const BUTTON_WARNING = "btn-warning";
    const BUTTON_DANGER = "btn-danger";
    const BUTTON_LINK = "btn-link";
    const BUTTON_LARGE = "btn-lg";
    const BUTTON_MEDIUM = ""; // default
    const BUTTON_SMALL = "btn-sm";
    const BUTTON_EXTRA_SMALL = "btn-xs";

    const CHECKBOX = "checkbox";
    const CHECKBOX_INLINE = 'checkbox-inline';
    const RADIO_INLINE = 'radio-inline';


    const CONTROL_LABEL = "control-label";

    const HAS_WARNING = "has-warning";
    const HAS_ERROR = "has-error";
    const HAS_SUCCESS = "has-success";
    const HAS_FEEDBACK = "has-feedback"; // feedback icon will be included

    const GLYPHICON = "glyphicon";
    const CLOSE_ICON = "close";
    const CARET_ICON = "caret";

    const SCREEN_READER_ONLY = "sr-only"; // class to only use this object in screen readers, and hide for everyone else
    const SCREEN_READER_FOCUSABLE = "sr-only-focusable";

    /** Backgrounds */
    const BACKGROUND_PRIMARY ="bg-primary";
    const BACKGROUND_SUCCESS ="bg-success";
    const BACKGROUND_INFO ="bg-info";
    const BACKGROUND_WARNING ="bg-warning";
    const BACKGROUND_DANGER ="bg-danger";

    /** Alignment */
    const PULL_LEFT = 'pull-left';
    const PULL_RIGHT = 'pull-right';
    const CENTER_BLOCK = 'center-block';

    /** Toggling */
    const HIDDEN = 'hidden';
    const VISIBLE = 'visible';

    const BLOCK = 'block';
    const INLINE = 'inline';
    const INLINE_BLOCK = 'inline-block';

    /** Nav */

    const NAV = "nav";
    const NAV_TABS = "nav-tabs";
    const NAV_PILLS = "nav-pills";
    const NAV_JUSTIFIED = "nav-justified";

    /** Navbar */

    const NAVBAR = 'nabar';

    const NAVBAR_DEFAULT = 'navbar-default';    // black on white
    const NAVBAR_INVERSE = 'navbar-inverse'; // white on black

    const NAVBAR_HEADER = 'navbar-header';
    const NAVBAR_COLLAPSE = 'navbar-collapse';

    const NAVBAR_BRAND = 'navbar-brand';
    const NAVBAR_TOGGLE = 'navbar-toggle';

    const NAVBAR_NAV = 'navbar-nav';

    const NAVBAR_LEFT = 'navbar-left';
    const NAVBAR_RIGHT = 'navbar-right';
    const NAVBAR_FORM = 'navbar-form';

    /* Panels */
    const PANEL = 'panel';
    const PANEL_DEFAULT = 'panel-default';
    const PANEL_PRIMARY = 'panel-primary';
    const PANEL_WARNING = 'panel-warning';
    const PANEL_DANGER = 'panel-danger';
    const PANEL_SUCCESS = 'panel-success';
    const PANEL_INFO = 'panel-info';
    const PANEL_HEADING = 'panel-heading';
    const PANEL_TITLE = 'panel-title';
    const PANEL_COLLAPSE = 'panel-collapse';
    const PANEL_BODY = 'panel-body';
    const PANEL_FOOTER = 'panel-footer';
    const PANEL_GROUP = 'panel-group';

    /* Alerts */
    const ALERT = 'alert';
    const ALERT_SUCCESS = 'alert-success';
    const ALERT_INFO = 'alert-info';
    const ALERT_WARNING = 'alert-warning';
    const ALERT_DANGER = 'alert-danger';
    const ALERT_DISMISSABLE = 'alert-dismissable';

    /** Misc */
    const ROW = 'row';
    const CLEAR_FIX = 'clearfix';
    const TEXT_HIDE = 'text-hide';

    /** Modal */
    const MODAL_LARGE = 'modal-lg';
    const MODAL_SMALL = 'modal-sm';




    /** Utility methods */

    /**
     * Builds a class used for toggling the visibility of content at different breakpoints.
     *
     * @param bool $blnVisible	True if this is one that shows object. False for a hidden object
     * @param string $strDeviceSize One of xs, sm, md, lg or print
     * @param null|string $strDisplayType block, inline-block or inline
     * @return string
     */
    public static function createVisibilityClass($blnVisible, $strDeviceSize, $strDisplayType = null)
    {
        $strClass = $blnVisible ? Bootstrap::VISIBLE : Bootstrap::HIDDEN;
        $strClass .= '-' . $strDeviceSize;
        if ($blnVisible) {
            assert($strDisplayType);
            $strClass .= $strDisplayType;
        }
        return $strClass;
    }

    /**
     * Creates a column class for sizing a column at a certain breakpoint.
     *
     * @param $strDeviceSize
     * @param int $intColumns
     * @param int $intOffset
     * @param int $intPush
     * @return string
     */
    public static function createColumnClass($strDeviceSize, $intColumns = 0, $intOffset = 0, $intPush = 0)
    {
        $strClass = '';
        if ($intColumns) {
            $strClass = 'col-' . $strDeviceSize . '-' . $intColumns . ' ';
        }

        if ($intOffset) {
            $strClass .= 'col-' . $strDeviceSize . '-offset-' . $intOffset . ' ';
        }

        if ($intPush) {
            if ($intPush > 0) {
                $strClass .= 'col-' . $strDeviceSize . '-push-' . $intPush;
            } else {
                $strClass .= 'col-' . $strDeviceSize . '-pull-' . -$intPush;
            }
        }
        return trim($strClass);
    }

    /**
     * Given a Bootstrap::Glyph* icon value, will output the html for that icon.
     *
     * @param string $strIcon
     * @param string|null $strDescription Alternate description for screen readers
     * @return string
     */
    public static function createGlyphHtml($strIcon, $strDescription = null)
    {
        $strToReturn = sprintf('<span class="glyphicon %s" aria-hidden="true"></span>', $strIcon);
        if ($strDescription) {
            $strToReturn .= sprintf('<span class="sr-only">%s</span>', $strDescription);
        }
        return $strToReturn;
    }

    /**
     * Load the javascript files required for bootstrap compatibility with qcubed. This should be called by bootstrap
     * widgets that depend on the bootstrap javascript.
     *
     * If you are using bootstrap on forms that do not include the bootstrap widgets
     * in this plugin, then the code below will not be executed to load the bootstrap js file on those forms. You
     * should instead include both files below in your QForm javascript files to auto load by overloading
     * GetFormJavaScripts in your QForm class.
     *
     * @param Q\Control\ControlBase $objControl
     */
    public static function loadJS(Q\Control\ControlBase $objControl)
    {
        $objControl->addJavascriptFile(QCUBED_BOOTSTRAP_JS);
        $objControl->addJavascriptFile(QCUBED_BOOTSTRAP_ASSETS_URL . '/js/qshim.js'); // for jquery ui compatibility
    }
}
