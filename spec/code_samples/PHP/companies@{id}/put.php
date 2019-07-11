$organizationForm = new Rebilly\Entities\Organization();
$organizationForm->setName('Test Organization');
$organizationForm->setCountry('US');

try {
    $organization = $client->companies()->update('organizationId', $organizationForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
