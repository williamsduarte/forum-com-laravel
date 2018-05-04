<template>
    <div class="card">
        <div class="card-content">
            <span class="card-title">
                Thread
            </span>

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Thread</th>
                        <th>Reply</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tópico legalk que vamos puxar no Laravel em realtime</td>
                        <td>3</td>
                        <td>
                            <a href="/threads/1">open</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>


<script>
  export default {
    mounted() {
      console.log('Component mounted. threads')
    }
  }
</script>
