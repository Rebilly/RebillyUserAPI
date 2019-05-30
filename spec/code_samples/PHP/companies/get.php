$companies = $client->companies()->search([
    'filter' => 'city:Test',
]);
