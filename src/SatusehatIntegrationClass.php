<?php

namespace Ivanwilliammd\SatusehatIntegration;

class SatusehatIntegrationClass
{
    public $patient_dev = ['P02478375538', 'P02428473601', 'P03647103112', 'P01058967035', 'P01836748436', 'P01654557057', 'P00805884304', 'P00883356749', 'P00912894463'];
    public $practitioner_dev = ['10009880728','10006926841', '10001354453', '10010910332', '10018180913', '10002074224', '10012572188', '10018452434', '10014058550', '10001915884'];

    public function __construct()
    {
        if(env("SATUSEHAT_ENV") == 'PROD'){
            $this->auth_url = "https://api-satusehat.kemkes.go.id/oauth2/v1";
            $this->base_url = "https://api-satusehat.kemkes.go.id/fhir-r4/v1";
            $this->client_id = env("CLIENTID_PROD");
            $this->client_secret = env("CLIENTSECRET_PROD");
            $this->organization_id = env("ORGID_PROD");
        }
        elseif(env("SATUSEHAT_ENV") == 'STG'){
            $this->auth_url = "https://api-satusehat-stg.dto.kemkes.go.id/oauth2/v1";
            $this->base_url = "https://api-satusehat-stg.dto.kemkes.go.id/fhir-r4/v1";
            $this->client_id = env("CLIENTID_STG");
            $this->client_secret = env("CLIENTSECRET_STG");
            $this->organization_id = env("ORGID_STG");
        }
        elseif(env("SATUSEHAT_ENV") == 'DEV'){
            $this->auth_url = "https://api-satusehat-dev.dto.kemkes.go.id/oauth2/v1";
            $this->base_url = "https://api-satusehat-dev.dto.kemkes.go.id/fhir-r4/v1";
            $this->client_id = env("CLIENTID_DEV");
            $this->client_secret = env("CLIENTSECRET_DEV");
            $this->organization_id = env("ORGID_DEV");
        }
    }
}
