# Projeto de Sistema para o IFBA

O sistema deve atender aos seguintes requisitos:

- **Controle de frequência**: Controlar a frequência dos professores e técnicos (controle de ponto).
- **Busca por carga horaria incompleta:** Permitir buscar pelos servidores que não estão cumprindo com sua carga horaria (DE, 40H, ou 20h). Lembre-se, o sistema deve levar a carga horaria de cada servidor em consideração na hora de realizar a busca. Isto é, servidores 20h deveriam cumprir 20h e aqueles que não o fazem devem aparecer na lista de "inadimplentes". O mesmo deve ser feito com aqueles que são 40h. Considere que os servidores dedicação exclusiva (DE) tem carga horaria de 40h. 
- **Cadastro de empregados:** Terceirizados e servidores, sejam eles professores, técnicos ou outros, devem ser cadastrados no sistema. O cadastro deve conter o nome, endereço, telefone, cargo, e regime de carga horaria do servidor (DE, 40H, ou 20H). No caso dos professores, o sistema deve registrar também as turmas que ele leciona para que os chefes de departamento possam planejar o ano letivo (ou semestre, no caso dos cursos superiores). 
- **Cadastro de alunos:** Os aluno devem ser cadastrados no sistema. O cadastro deve conter o nome, endereço, telefone, curso (superior, técnico), modalidade (técnico em informática, ADS, ou Licenciatura em Informática), data de ingresso no curso (ano e mes), e a qual(is) turma(s) ele pertence. Lembre-se que alunos do curso superior pertencem a varias turmas, cada uma associada a uma disciplina (1 turma -> 1 disciplina). Ja os alunos do ensino técnico pertencem a uma unica turma, que possui aulas de várias disciplinas (1 turma -> N disciplinas). 
- **Controle de notas dos alunos:** O sistema deve controlar as notas dos alunos, por unidade e por disciplina. Considere que os alunos do curso técnico tem 3 unidades e os alunos dos cursos superiores tem apenas 1 unidade. O professor pode colocar N notas em cada unidade para cada aluno, e o sistema deve ser capaz de calcular a media do aluno (por unidade) usando essas notas. O sistema também deve ser capaz de fornecer uma média final (aritmética) para cada aluno.
- **Controle de frequência dos alunos:** O sistema deve controlar a frequência dos alunos. Considere que o professor da turma insere no sistema os dias que o aluno esteve presente ou ausente em sala de aula. Dessa forma, a frequencia é calculada como ``frequencia = total de presenças / total de aulas``. 
- **Controle de aprovação/reprovação:** O sistema deve informar se o aluno foi reprovado ou aprovado. No caso da reprovação, o sistema deve detalhar o motivo (reprovação por falta, ou reprovação por media). Considere que alunos do ensino técnico são aprovados com média >= 5.0, enquanto que alunos do ensino superior precisam de média >= 7.0. Ambos necessitam de uma frequência >= 75.0 % para conseguir a aprovação.         