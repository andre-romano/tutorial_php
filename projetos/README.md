
# Pasta Projetos

Este arquivo contem os projetos de DB que podem ser passados para voce no decorrer da disciplina.

Cada item do sumário abaixo contém uma descrição detalhada de um projeto especifico, contendo os requisitos esperados do sistema.

## DICAS

Vejam dicas de projeto, concepção e implementação em [./dicas.md](dicas.md).

No arquivo **[exemplo_ifba.php](exemplo_ifba.php)** tem exemplos de como construir a interface de usuário (telas) para cada projeto. 

## Sumário
- [Pasta Projetos](#pasta-projetos)
  - [DICAS](#dicas)
  - [Sumário](#sumário)
    - [1. Sistema de Gestão de Biblioteca](#1-sistema-de-gestão-de-biblioteca)
    - [2. Sistema de Gestão de Restaurante](#2-sistema-de-gestão-de-restaurante)
    - [3. Sistema de Gerenciamento de Projetos](#3-sistema-de-gerenciamento-de-projetos)
    - [4. Sistema de Controle de Estoque](#4-sistema-de-controle-de-estoque)
    - [5. Sistema de Gestão Escolar](#5-sistema-de-gestão-escolar)
    - [6. Sistema de Reserva de Quartos de Hotel](#6-sistema-de-reserva-de-quartos-de-hotel)
    - [7. Sistema de Vendas Online](#7-sistema-de-vendas-online)
    - [8. Sistema Especialista para Diagnóstico de Doenças](#8-sistema-especialista-para-diagnóstico-de-doenças)
    - [9. Sistema de Agendamento de Consultas Médicas](#9-sistema-de-agendamento-de-consultas-médicas)
    - [10. Sistema de Gestão de Cursos](#10-sistema-de-gestão-de-cursos)
    - [11. Sistema de Controle de Manutenção de Veículos](#11-sistema-de-controle-de-manutenção-de-veículos)
    - [12. Sistema de Gestão de Imóveis](#12-sistema-de-gestão-de-imóveis)
    - [13. Sistema de Controle de Frequência Escolar](#13-sistema-de-controle-de-frequência-escolar)
    - [14. Sistema de Gestão de Academia](#14-sistema-de-gestão-de-academia)
    - [15. Sistema de Gestão de Eventos](#15-sistema-de-gestão-de-eventos)
    - [16. Sistema de Gestão de Transportadora](#16-sistema-de-gestão-de-transportadora)


### 1. Sistema de Gestão de Biblioteca
**Descrição:** 
Um sistema para gerenciar o empréstimo de livros em uma biblioteca. Inclui funcionalidades para cadastro de livros, usuários, controle de empréstimos e devoluções.

**Funcionalidades:**
- Cadastro de livros (título, autor, editora, ano de publicação, ISBN)
- Cadastro de usuários (nome, endereço, telefone, email)
- Empréstimo de livros (data de empréstimo, data de devolução)
- Devolução de livros
- Pesquisa de livros e usuários
- Relatórios de empréstimos em andamento e históricos

### 2. Sistema de Gestão de Restaurante
**Descrição:**
Um sistema para gerenciar pedidos, mesas e cardápio de um restaurante. Inclui funcionalidades para cadastro de pratos, mesas e controle de pedidos.

**Funcionalidades:**
- Cadastro de pratos (nome, descrição, preço)
- Cadastro de mesas (número da mesa, capacidade)
- Registro de pedidos (mesa, prato, quantidade, status do pedido)
- Controle de pagamento e fechamento de conta
- Relatórios de vendas diárias e mensais

### 3. Sistema de Gerenciamento de Projetos
**Descrição:**
Um sistema para gerenciar projetos, tarefas e membros da equipe. Inclui funcionalidades para cadastro de projetos, tarefas e acompanhamento do progresso.

**Funcionalidades:**
- Cadastro de projetos (nome, descrição, data de início, data de término)
- Cadastro de tarefas (nome, descrição, data de início, data de término, status, projeto relacionado)
- Cadastro de membros da equipe (nome, função, email)
- Atribuição de tarefas aos membros da equipe
- Relatórios de progresso dos projetos e tarefas

### 4. Sistema de Controle de Estoque
**Descrição:**
Um sistema para gerenciar o estoque de uma loja ou armazém. Inclui funcionalidades para cadastro de produtos, controle de entrada e saída de produtos e geração de relatórios de estoque.

**Funcionalidades:**
- Cadastro de produtos (nome, descrição, quantidade, preço de custo, preço de venda)
- Registro de entrada de produtos (produto, quantidade, data)
- Registro de saída de produtos (produto, quantidade, data)
- Relatórios de estoque atual, produtos mais vendidos e produtos com baixo estoque

### 5. Sistema de Gestão Escolar
**Descrição:**
Um sistema para gerenciar informações de alunos, turmas, professores e notas. Inclui funcionalidades para cadastro de alunos, professores, turmas e lançamento de notas.

**Funcionalidades:**
- Cadastro de alunos (nome, data de nascimento, endereço, telefone)
- Cadastro de professores (nome, disciplina, email, telefone)
- Cadastro de turmas (nome da turma, ano letivo, professores)
- Lançamento de notas (aluno, turma, disciplina, nota)
- Relatórios de desempenho dos alunos por turma e disciplina

### 6. Sistema de Reserva de Quartos de Hotel
**Descrição:**
Um sistema para gerenciar a reserva de quartos de um hotel. Inclui funcionalidades para cadastro de quartos, hóspedes e reservas.

**Funcionalidades:**
- Cadastro de quartos (número do quarto, tipo, preço, status)
- Cadastro de hóspedes (nome, endereço, telefone, email)
- Registro de reservas (quarto, hóspede, data de entrada, data de saída)
- Controle de check-in e check-out
- Relatórios de ocupação de quartos e histórico de reservas

### 7. Sistema de Vendas Online
**Descrição:**
Um sistema para gerenciar vendas de produtos online. Inclui funcionalidades para cadastro de produtos, controle de pedidos e gestão de clientes.

**Funcionalidades:**
- Cadastro de produtos (nome, descrição, preço, estoque)
- Cadastro de clientes (nome, endereço, telefone, email)
- Registro de pedidos (cliente, produto, quantidade, data, status)
- Controle de envio de pedidos
- Relatórios de vendas por período e produto

### 8. Sistema Especialista para Diagnóstico de Doenças

**Descrição:**
Um sistema especialista para diagnosticar doenças comuns baseando-se nos sintomas informados pelo usuário. O sistema utilizará uma base de dados para armazenar informações sobre doenças, sintomas e regras de diagnóstico.

**Funcionalidades:**
- Cadastro de Doenças (nome, descrição e uma lista de sintomas associados)
- Cadastro de Sintomas (nome, descrição).
- Consulta de Diagnóstico
   - O usuário deve poder inserir sintomas e o sistema deve sugerir possíveis doenças com base nos sintomas informados.
   - O sistema deve exibir uma lista de possíveis doenças ordenadas pela probabilidade baseada nos sintomas.
   - A probabilidade ($P$) pode ser estimada como uma razão simples da quantidade de sintomas detectados ($S_D$) pela quantidade total de sintomas da doença ($S_T$). Isto é:
    $$P = \frac{S_D}{S_T}$$

### 9. Sistema de Agendamento de Consultas Médicas
**Descrição:**
Um sistema para gerenciar agendamentos de consultas em uma clínica médica. Inclui funcionalidades para cadastro de médicos, pacientes e agendamento de consultas.

**Funcionalidades:**
- Cadastro de médicos (nome, especialidade, horário de atendimento)
- Cadastro de pacientes (nome, endereço, telefone, email)
- Agendamento de consultas (paciente, médico, data, hora)
- Histórico de consultas

### 10. Sistema de Gestão de Cursos
**Descrição:**
Um sistema para gerenciar cursos (online ou presencial), incluindo cadastro de cursos, alunos, instrutores e controle de matrículas.

**Funcionalidades:**
- Cadastro de cursos (nome, descrição, instrutor, duração)
- Cadastro de alunos (nome, email, telefone)
- Cadastro de instrutores (nome, especialidade, email)
- Matrícula de alunos em cursos
- Acompanhamento do progresso do curso (qtd de aulas ministradas em relacao ao total)
- Avaliação dos cursos pelos alunos
- Avaliação dos alunos por curso (notas)

### 11. Sistema de Controle de Manutenção de Veículos
**Descrição:**
Um sistema para gerenciar a manutenção de veículos em uma oficina mecânica. Inclui funcionalidades para cadastro de veículos, clientes, ordens de serviço e histórico de manutenção.

**Funcionalidades:**
- Cadastro de veículos (marca, modelo, ano, placa)
- Cadastro de clientes (nome, endereço, telefone)
- Registro de ordens de serviço (veículo, cliente, serviço, data, custo)
- Histórico de manutenção por veículo
- Relatórios de serviços realizados

### 12. Sistema de Gestão de Imóveis
**Descrição:**
Um sistema para gerenciar a venda e locação de imóveis. Inclui funcionalidades para cadastro de imóveis, proprietários, inquilinos e contratos.

**Funcionalidades:**
- Cadastro de imóveis (endereço, tipo, valor, status)
- Cadastro de proprietários (nome, endereço, telefone)
- Cadastro de inquilinos (nome, endereço, telefone)
- Registro de contratos de venda e locação
- Controle de pagamentos de aluguel
- Relatórios de imóveis disponíveis e ocupados

### 13. Sistema de Controle de Frequência Escolar
**Descrição:**
Um sistema para gerenciar a frequência de alunos em uma escola. Inclui funcionalidades para cadastro de turmas, alunos e registro de presença.

**Funcionalidades:**
- Cadastro de turmas (nome, ano letivo, professores)
- Cadastro de alunos (nome, data de nascimento, endereço)
- Registro de frequência (turma, aluno, data, status de presença)
- Relatórios de frequência por aluno e por turma
- Alertas para faltas excessivas

### 14. Sistema de Gestão de Academia
**Descrição:**
Um sistema para gerenciar membros e treinos em uma academia. Inclui funcionalidades para cadastro de membros, instrutores, planos de treino e controle de pagamentos.

**Funcionalidades:**
- Cadastro de membros (nome, endereço, telefone)
- Cadastro de instrutores (nome, especialidade, telefone)
- Criação de planos de treino (nome, descrição, duração)
- Atribuição de planos de treino aos membros
- Registro de pagamentos de mensalidades
- Relatórios de frequência dos membros e pagamentos

### 15. Sistema de Gestão de Eventos
**Descrição:**
Um sistema para gerenciar eventos, incluindo cadastro de eventos, participantes e controle de inscrições.

**Funcionalidades:**
- Cadastro de eventos (nome, data, local, descrição)
- Cadastro de participantes (nome, email, telefone)
- Registro de inscrições em eventos
- Controle de presença nos eventos
- Relatórios de eventos e participantes inscritos e ocupação do espaço (qtd de inscritos vs  capacidade total do espaço)

### 16. Sistema de Gestão de Transportadora
**Descrição:**
Um sistema para gerenciar entregas e frotas de uma transportadora. Inclui funcionalidades para cadastro de veículos, motoristas, rotas e controle de entregas.

**Funcionalidades:**
- Cadastro de veículos (marca, modelo, placa)
- Cadastro de motoristas (nome, telefone, licença)
- Definição de rotas (origem, destino, paradas)
- Registro de entregas (veículo, motorista, rota, data, status)
- Histórico de entregas
