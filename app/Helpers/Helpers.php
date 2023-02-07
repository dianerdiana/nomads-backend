<?php

class Helpers
{
  public static function response($type = '', $target = 'User', $status = 'success')
  {
    switch (strtolower($status)) {
      case 'success':
        switch (strtolower($type)) {
          case 'add':
          case 'create':
            $message = $target . ' created successfully.';
            break;

          case 'update':
          case 'edit':
            $message = $target . ' updated successfully.';
            break;

          case 'delete':
          case 'destroy':
            $message = $target . ' deleted successfully.';
            break;

          case 'active':
            $message = $target . ' activated successfully.';
            break;

          case 'inactive':
            $message = $target . ' deactivated successfully.';
            break;

          default:
            $message = $target . ' created successfully.';
            break;
        }
        break;
      case 'fail':
      case 'failed':
        switch (strtolower($type)) {
          case 'add':
          case 'create':
            $message = $target . ' creation failed.';
            break;

          case 'update':
          case 'edit':
            $message = $target . ' update failed.';
            break;

          case 'delete':
          case 'destroy':
            $message = $target . ' delete failed.';
            break;

          case 'active':
            $message = $target . ' activation failed.';
            break;

          case 'inactive':
            $message = $target . ' deactivation failed.';
            break;

          default:
            $message = $target . ' creation failed.';
            break;
        }
        break;
    }

    return $message;
  }
}
