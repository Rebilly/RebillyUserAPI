$companyForm = new Rebilly\Entities\Company();
$companyForm->setName('Test Company');
$companyForm->setCountry('US');

try {
    $company = $client->companies()->create($companyForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
