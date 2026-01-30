@extends('layouts.app')

@section('content')

<style>
    :root {
        --primary: #2563eb;
        --bg: #f8fafc;
        --card: #ffffff;
        --text: #1f2937;
        --muted: #6b7280;
        --border: #e5e7eb;
    }

    .tc-header {
        background: linear-gradient(135deg, #021736, #021736);
        color: #fff;
        padding: 3rem 1rem;
        text-align: center;
    }

    .tc-header h1 {
        font-size: 2.2rem;
        font-weight: 700;
        margin: 0;
    }

    .tc-header p {
        margin-top: .5rem;
        opacity: .9;
    }

    .tc-container {
        max-width: 900px;
        margin: -40px auto 60px;
        padding: 0 1rem;
    }

    .tc-card {
        background: var(--card);
        border-radius: 14px;
        padding: 2.5rem;
        box-shadow: 0 20px 40px rgba(0,0,0,.08);
        border: 1px solid var(--border);
    }

    .tc-card h2 {
        color: var(--primary);
        font-size: 1.3rem;
        margin-top: 2rem;
        font-weight: 600;
    }

    .tc-card h2:first-child {
        margin-top: 0;
    }

    .tc-card p {
        margin: .5rem 0 1rem;
        line-height: 1.7;
    }

    .tc-card ul {
        padding-left: 1.2rem;
    }

    .tc-footer {
        text-align: center;
        color: var(--muted);
        font-size: .9rem;
        padding-bottom: 2rem;
    }

    @media (max-width: 600px) {
        .tc-card {
            padding: 1.5rem;
        }

        .tc-header h1 {
            font-size: 1.8rem;
        }
    }
</style>

@include('partials.menu')

<section class="tc-header">
    <!-- <img src="{{asset('storage/' . $company->logo_blanco)}}" width="200" alt="Logo"> -->
        <h1 class="text-white">Libro de Reclamaciones</h1>
</section>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content px-4">
                <div class="header-text">
                    <h3 class="pt-4">1. DATOS DE LA PERSONA QUE PRESENTA LA QUEJA O RECLAMO</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <input required type="date" class="form-control" id="fecha_nac" placeholder="Fecha Nacimiento">
                                <label for="name">Fecha Nacimiento</label>
                            </div>                      
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <select required class="form-control" name="tipo_doc" id="tipo_doc">
                                    <option value="0">-Seleccionar-</option>
                                    <option value="DNI">DNI</option>
                                    <option value="PASAPORTE">PASAPORTE</option>
                                </select>
                                <label for="name">Tipo documento</label>
                            </div>                       
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <input type="number" class="form-control" id="numero_doc" placeholder="Número de documento" max="9999999999" oninput="this.value = this.value.slice(0, 10)">
                                <label for="name">Número de documento</label>
                            </div>                       
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <input type="text" class="form-control inputTexto" id="nombres" placeholder="Nombre">
                                <label for="name">Nombre</label>
                            </div>                        
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <input type="text" class="form-control inputTexto" id="apellido_pat" placeholder="Apellido paterno">
                                <label for="name">Apellido paterno</label>
                            </div>                        
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <input type="text" class="form-control inputTexto" id="apellido_mat" placeholder="Apellido materno">
                                <label for="name">Apellido materno</label>
                            </div>                        
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <input type="email" class="form-control inputTexto" id="email" placeholder="Email">
                                <label for="name">Email</label>
                            </div>                       
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                @include('partials.phone')
                            </div>                       
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <select id="departamento" class="form-control departamento" name="mauticform[departamento]">    
                                    <option data-id="" value="">-Seleccionar-</option>
                                </select>
                                <label for="name">Departamento</label>
                            </div>                       
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <select id="provincia" class="form-control provincia" name="mauticform[provincia1]">
                                    <option data-id="" value="Chachapoyas">-Seleccionar-</option>                
                                </select>
                                <label for="name">Provincia</label>
                            </div>                         
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <select id="distrito" class="form-control distrito" name="mauticform[distrito1]">
                                    <option data-id="" value="">-Seleccionar-</option>
                                </select>
                                <label for="name">Distrito</label>
                            </div>                        
                        </div>

                        <div class="col-lg-9 col-md-12 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <input maxlength="100" type="text" class="form-control" id="direccion" placeholder="Direccion">
                                <label for="name">Dirección fiscal</label>
                            </div>                       
                        </div>
                    </div>
                    <h3 class="pt-4">2. INFORMACIÓN GENERAL</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <input type="text" maxlength="10" class="form-control inputTexto" id="orden_compra" placeholder="Orden de compra">
                                <label for="name">Orden de compra</label>
                            </div>                      
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <input type="number" class="form-control" id="monto" placeholder="Monto del producto/servicio" max="99999" oninput="this.value = this.value.slice(0, 5)">
                                <label for="name">Monto del producto/servicio</label>
                            </div>                       
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <textarea maxlength="500" class="form-control inputTexto" id="reclamo" style="height: 120px;" placeholder="Escribe"></textarea>
                                <label for="name">Detalla tu queja/reclamo</label>
                            </div>                        
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4 px-6">
                            <div class="form-floating">
                                
                                <textarea maxlength="500" class="form-control inputTexto" id="pedido" style="height: 120px;" placeholder="Escribe"></textarea>
                                <label for="name">Pedido</label>
                            </div>                         
                        </div>
                        <div class="col-lg-12 my-4 text-center">
                            <button class="btn btn-primary py-3 EnviarReclamo">Enviar reclamo</button>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>


@include('partials.footer')
@endsection