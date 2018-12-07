<?php

/**
 * Retorna o papel oporto ao informado (operador/condômino)
 * @param $papel
 * @param bool $format
 * @return null|string
 */
function papelOposto($papel, $format=false)
{
    switch($papel)
    {
        case 'o':
            return $format ? 'Condômino' : 'c';
            break;

        case 'c':
            return $format ? 'Operador' : 'c';
            break;

        default:
            return null;
            break;
    }
}

/**
 * Clacula a quantidade de páginas necessárias para mostrar uma collection
 * em uma tabela.
 * @param Illuminate\Support\Collection $collection
 * @param $rows
 * @return float
 */
function calcPages($collection, $rows)
{
    $pages = $collection->count() / $rows;
    return ceil($pages);
}

function logoApp()
{
    $img = file_get_contents(base_path('public_html/images/logo.jpg'));
    $type = pathinfo(base_path('public_html/images/logo.jpg'), PATHINFO_EXTENSION);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
    return $base64;
}

function logoAppEmail()
{
    $img = file_get_contents(base_path('public_html/images/logo-email.png'));
    $type = pathinfo(base_path('public_html/images/logo-email.png'), PATHINFO_EXTENSION);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
    return $base64;
}

/**
 * Formata uma string de cpf/cnpj no modelo do banco de dados
 */
function cpf_cnpj($string)
{
    $doc = str_replace('/','', $string);
    $doc = str_replace('-','', $doc);
    $doc = str_replace('.','', $doc);
    $doc = strlen($doc) == 11 ? 'f'.$doc : 'j'.$doc;
    return $doc;
}

function planos($tipo)
{
    return \App\Plano::where([['tipo', $tipo],['ativo', true]])->orderBy('valor')->get();
}