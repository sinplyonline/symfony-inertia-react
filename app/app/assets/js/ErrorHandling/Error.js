import React, { useState, useEffect } from 'react';
import Layout from '../Layout';

function Error({statusCode}) {
    return (
        <Layout activeButton="news">
            <div className={"row"}>
                Oei deze pagina geeft een {statusCode} error :( . Probeer opnieuw of contacteer een administrator.
            </div>
        </Layout>);
}

export default Error;
