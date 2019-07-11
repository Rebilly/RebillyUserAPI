$organizations = $client->companies()->search([
    'filter' => 'city:Test',
]);
