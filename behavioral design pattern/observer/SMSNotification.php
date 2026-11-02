<?php
// Challenge: added later WITHOUT modifying GradeSystem
class SMSNotification implements Observer {
    public function update(float $grade): void { echo "SMS Notification:\nGrade alert sent.\n"; }
}
