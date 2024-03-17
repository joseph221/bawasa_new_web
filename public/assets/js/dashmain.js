function markNotificationAsreadAll() {
    $.get('/markAsRead');
}

function markNotificationAsread(notificationId) {
    // alert(notificationId)
    $.get('/markAsRead/'+ notificationId);
}

function ok() {
    location.reload();
}
