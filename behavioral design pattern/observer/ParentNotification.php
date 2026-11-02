<?php
class ParentNotification implements Observer {
    public function update(float $grade): void { echo "Parent Notification:\nStudent grade has been posted.\n"; }
}
