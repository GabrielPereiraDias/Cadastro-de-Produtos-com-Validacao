<div align="center">

# 🛒 Cadastro de Produtos com Validação

### 📦 Formulário em PHP + HTML integrado ao MySQL

[![PHP](https://img.shields.io/badge/PHP-8%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Status](https://img.shields.io/badge/Status-Concluído-2ea44f?style=for-the-badge)](#)

</div>

---

## 📋 Sobre o projeto

Este repositório contém uma atividade prática de **PHP com HTML e MySQL**, desenvolvida para trabalhar o cadastro e a validação de produtos.

A aplicação possui um formulário onde o usuário informa o **nome** e o **preço** de um produto. Antes de realizar o cadastro, os dados são verificados para evitar informações inválidas.

Quando tudo está correto, o produto é inserido na tabela `produtos` do banco de dados **exerciciophp**.

---

## ⚙️ O que o projeto faz?

O sistema realiza um fluxo simples:

```text
📝 Preencher formulário
        ↓
🔎 Verificar os dados
        ↓
❌ Dados inválidos → Exibir mensagem de erro
        ↓
✅ Dados válidos
        ↓
🗄️ Conectar ao MySQL
        ↓
📦 Inserir produto na tabela
        ↓
🎉 Confirmar cadastro
```

### ✅ Validações utilizadas

- **Nome do produto:** não pode ficar vazio.
- **Preço:** precisa ser numérico e maior que zero.
- **Conexão com o banco:** verifica se a conexão com o MySQL foi realizada corretamente.
- **Cadastro:** informa se o produto foi inserido ou se ocorreu algum erro.

---

## 🧰 Tecnologias utilizadas

| Tecnologia | Utilização |
|---|---|
| 🐘 **PHP** | Processamento do formulário e validações |
| 🌐 **HTML5** | Estrutura do formulário |
| 🗄️ **MySQL** | Armazenamento dos produtos |
| 🔗 **MySQLi** | Conexão entre PHP e banco de dados |

---

## 🗃️ Banco de dados

O projeto utiliza o banco de dados **`exerciciophp`**, com a tabela **`produtos`**.

Estrutura utilizada:

```sql
CREATE DATABASE exerciciophp;

USE exerciciophp;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);
```

### 📌 Estrutura da tabela

| Campo | Tipo | Descrição |
|---|---|---|
| `id` | INT | Identificador automático |
| `nome` | VARCHAR(100) | Nome do produto |
| `preco` | DECIMAL(10,2) | Preço do produto |

---

## 🚀 Como executar

### 1️⃣ Prepare o ambiente

Tenha instalado um ambiente com:

- PHP
- MySQL
- Servidor local, como XAMPP ou similar
- Navegador

### 2️⃣ Configure o banco

Crie o banco e a tabela utilizando o SQL mostrado acima.

### 3️⃣ Coloque o projeto no servidor

Adicione o arquivo `10a_desafio2.php` na pasta do servidor local.

### 4️⃣ Abra no navegador

Acesse o arquivo pelo endereço do seu servidor local e preencha o formulário.

> 💡 **Importante:** as credenciais do MySQL utilizadas no arquivo PHP precisam corresponder às configurações do seu ambiente local.

---

## 🖥️ Funcionamento

O formulário solicita:

```text
Nome do Produto: [____________________]

Preço:           [____________________]

                 [  Cadastrar  ]
```

Após o envio:

- 🟢 Se os dados forem válidos → o produto é cadastrado.
- 🔴 Se o nome estiver vazio → aparece uma mensagem de erro.
- 🔴 Se o preço não for numérico ou for menor/igual a zero → aparece uma mensagem de erro.
- 🔴 Se houver problema na conexão ou no cadastro → o sistema informa o erro.

---

## 📁 Estrutura do repositório

```text
Cadastro-de-Produtos-com-Validacao/
│
├── 📄 10a_desafio2.php
└── 📘 README.md
```

---

## 🎯 Objetivo da atividade

Praticar conceitos fundamentais de desenvolvimento **back-end com PHP**, incluindo:

- Formulários HTML;
- Método `POST`;
- Validação de dados;
- Condicionais em PHP;
- Conexão com banco de dados;
- Comandos SQL;
- Inserção de registros;
- Tratamento básico de erros.

---

<div align="center">

### 💻 Atividade de Desenvolvimento de Sistemas

**Gabriel Pereira Dias**  
**SENAI Jacob Lafer · 1ID - DS**

⭐ Feito para praticar PHP, validação de dados e integração com MySQL.

</div>
