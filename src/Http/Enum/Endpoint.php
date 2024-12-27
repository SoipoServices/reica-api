<?php

namespace Soiposervices\Http\Enum;

// This class contains all the endpoints that the API that the ReicaConnector class will use
enum Endpoint: string
{
    case SYSTEM_OPTIONS = 'system/options';
    case RERUN = 'rerun';
    case USERS_FOLDERS = 'user/folders';
    case FOLDERS = 'folders';
    case IMAGES = 'images';
    case WORKFLOW = 'workflow';
    case WORKFLOW_OPTIONS_BACKGROUND_TEMPLATES = 'workflow/options/background_templates';
    case WORKFLOW_OPTIONS_OBJECTS = 'workflow/options/objects';
    case WORKFLOW_OPTIONS_VTO = 'workflow/options/vto';
    case WORKFLOW_OPTIONS_LOCALIZATION = 'workflow/options/localization';
    case WORKFLOW_OPTIONS_GENERATE = 'workflow/options/generate';
    case WORKFLOW_BACKGROUND_REMOVER = 'workflow/background_remover';
    case WORKFLOW_RESIZE = 'workflow/resize';
    case WORKFLOW_VIRTUAL_TRY_ON = 'workflow/vto';
    case WORKFLOW_MISSING_HEAD = 'workflow/missinghead';
    case WORKFLOW_LOCALIZATION = 'workflow/localization';
    case WORKFLOW_BACKGROUND_MARKETPLACE = 'workflow/background_marketplace';
    case WORKFLOW_OUTPAINTING = 'workflow/outpainting';
    case WORKFLOW_COPYCAT = 'workflow/copycat';
    case WORKFLOW_UPSCALE = 'workflow/upscale';
    case WORKFLOW_GENERATE = 'workflow/generate';
    case CHILD_FOLDER = 'child/folder';
    case CHILD_IMAGE = 'child/image';
    case NOTIFICATIONS_ALL = 'notifications/all';
    case NOTIFICATIONS_MARK_AS_READ = 'notifications/mark-as-read';
    case NOTIFICATIONS_MARK_ALL_AS_READ = 'notifications/mark-all-as-read';
    case DOWNLOAD_IMAGE = 'download';


}