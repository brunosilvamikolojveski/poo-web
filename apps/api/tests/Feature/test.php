<?php
test('user-created', function () {
    $this->assertDatabaseMissing('users', [
        'email' => 'teste@teste.com',
    ]);
});