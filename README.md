# 💉 Sistema de Carteira de Vacinação Digital


## 🎯 Objetivo Geral

Oferecer uma plataforma unificada para gestão, agendamento e acompanhamento digital de vacinas, com autenticação segura e integração entre cidadãos, profissionais de saúde e gestores públicos.

## 👩‍💼 Papéis e Funcionalidades

#### 🩺 1. Paciente

- Cadastro via GOV.BR (autenticação OAuth 2.0).

- Perfil com dados pessoais e histórico de vacinação.

- Agendamento online de vacinas (escolhe data e posto).

- Mapa interativo (Google Maps API / Leaflet.js) mostrando postos próximos.

- Visualização de campanhas ativas e vacinas recomendadas conforme idade/sexo.

- Controle pessoal de agenda de vacinação (próximas doses, atrasadas).

- Visualização de QR Codes únicos por vacina aplicada.

- Painel com indicadores de saúde pública locais:

- surtos e alertas da região;

- vacinas em destaque;

- campanhas de prevenção.

💡 Futuro: Chatbot integrado para tirar dúvidas sobre vacinas, sintomas e campanhas.

#### 🧑‍⚕️ 2. Servidor do Posto de Saúde

- Login com perfil de servidor autorizado.

- Registro de novas aplicações de vacina (escaneando QR Code do paciente).

- Consulta do histórico de vacinação de cada paciente.

- Dashboard com indicadores:

    **número de vacinas aplicadas no mês;**

    **média de vacinação por faixa etária;**

    **vacinas mais administradas.**

- Controle de estoque local de vacinas.

#### 🧑‍💼 3. Administrador

- Painel completo de gestão do sistema:
    
    **CRUD de postos de saúde;**
    
    **CRUD de servidores e permissões;**
    
    **Cadastro e atualização das vacinas disponíveis.**

- Dashboard analítico:

    **cobertura vacinal por região;**
    
    **média de vacinas aplicadas;**
    
    **comparação de campanhas;**
    
    **mapa de distribuição de vacinas.**

- Gerenciamento de usuários e logs de atividades.

-----------

  ## 🧱 Arquitetura e Tecnologias

| Componente         | Descrição                                               |
| ------------------ | ------------------------------------------------------- |
| **Backend**        | Laravel 11 (API + MVC + Blade ou Inertia.js)            |
| **Banco de Dados** | MySQL / PostgreSQL (com Eloquent ORM)                   |
| **Autenticação**   | Laravel Breeze ou Laravel Passport (para API GOV.BR)    |
| **API GOV.BR**     | OAuth 2.0 (validação de identidade do paciente)         |
| **Geolocalização** | Google Maps API ou Leaflet + OpenStreetMap              |
| **QR Code**        | `simple-qrcode` ou `endroid/qr-code`                    |
| **Dashboards**     | Laravel Charts (Chart.js)                               |
| **Notificações**   | Laravel Notifications + e-mail ou WhatsApp (Twilio API) |
| **Segurança**      | Criptografia AES, HTTPS, tokens JWT                     |
| **Front-end**      | Blade com Tailwind / Inertia + Vue.js                   |
| **Futuro Chatbot** | API Dialogflow / Gemini / GPT API integrada             |
| **Deploy**         | Railway / Render / VPS Ubuntu                           |


-----------

## 🧭 Fluxo Principal

- Paciente se cadastra/loga via GOV.BR → API valida e retorna token JWT.

- Paciente escolhe posto e agenda → Sistema verifica disponibilidade e confirma.

- Servidor do posto confirma aplicação → registra lote e gera QR Code da dose.

- Paciente visualiza no painel → histórico atualizado + certificado digital da vacina.

- Admin acompanha via dashboard → indicadores em tempo real de cobertura vacinal.

-----------

## 📊 Funcionalidades Avançadas (para evolução futura)

🔐 Integração com blockchain para registro imutável de vacinas (prova de autenticidade).

🌍 Módulo epidemiológico que correlaciona vacinas com surtos notificados.

📱 Aplicativo mobile (Flutter) consumindo a API Laravel.

🤖 Chatbot inteligente com respostas automáticas baseadas em campanhas do Ministério da Saúde.

💬 Canal de denúncias de efeitos adversos pós-vacinação.

-----------

## Modelagem de Dados (resumo inicial)

Tabelas principais:

**users** → informações gerais (nome, CPF, papel, GOV.BR ID).

**roles** → perfis (admin, servidor, paciente).

**health_posts** → postos de saúde (nome, endereço, coordenadas).

**vaccines** → catálogo de vacinas (nome, fabricante, doses, intervalo).

**applications** → registro de vacinas aplicadas (data, lote, QR Code, servidor_id, paciente_id).

**appointments** → agendamentos de vacinação (data, status, posto_id, paciente_id).

**campaigns** → campanhas ativas (nome, período, vacinas envolvidas).

**regions** → controle regional (para relatórios).

-----------

## 🎓 Objetivo Técnico-Acadêmico

Consolidar conhecimentos em CRUD, relacionamentos e APIs.

Aplicar autenticação OAuth2 e consumo de APIs públicas.

Utilizar gráficos e dashboards dinâmicos.

Demonstrar integração entre Laravel, dados geográficos e automação de notificações.

Propor uma solução inovadora e escalável para a área da saúde pública digital.


